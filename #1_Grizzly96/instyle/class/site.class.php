<?php

class site_class extends instyle_class {
// Генерируем title и meta-теги для всех страниц сайта и корневых разделов каталога
function meta_generate() {	global $url;
	global $mysql;
	global $smarty;

	$meta = $mysql->result("SELECT `title`, `meta_keywords` AS `keywords`, `meta_description` AS `description` FROM `pages` WHERE `link` = '" . $url[count($url)-1] . "' LIMIT 0,1");

	$smarty->assign('meta', $meta);
}

// Функция передачи настроек в шаблонизатор
function settings() {
	global $mysql;
	global $smarty;
	
	$settings = $mysql->result("SELECT * FROM `settings` WHERE 1 LIMIT 0,1");
	
  	$smarty->assign('settings', $settings);	
}

function display() {
	global $url;
	global $smarty;
	global $mysql;

	$this->settings();
	$this->meta_generate();
	$this->send_message();	

	// Выбираем модуль
	$page = $mysql->result("SELECT `module` FROM `pages` WHERE `link` = '" . $url[1] . "' LIMIT 0,1");
	if ($page == 0) {
		$page = array();
		$page['module'] = 'menu.php';
	}

	if ($page != "") {
 		include ("modules/" . $page['module']);
	}
	else {
		// 404
		header("HTTP/1.1 404 Not Found");
	}

  	$smarty->assign("full_url", "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
  	$smarty->assign("url", $url);
	
  	$smarty->assign("session", $_SESSION);	

   	$smarty->display("index.tpl");
}


// Функция отправки сообщений
function send_message() {
	global $mysql;
	global $smarty;

	$settings = $mysql->result("SELECT * FROM `settings` WHERE 1 LIMIT 0,1");	
	
	// Даем возможность отправлять две и более формы с одной страницы
	if (strpos($_SERVER['HTTP_REFERER'], 'success=')) {
		$backlink = explode('?', $_SERVER['HTTP_REFERER']);
		
		$backlink = $backlink[0];
	}
	else {
		$backlink = $_SERVER['HTTP_REFERER'];
	}	
	
	if ($_POST['action'] == 'call_order' AND $_POST['key'] == FORM_KEY) {
		$text = "<html>
				 <body>
					<p><strong>Заказ звонка</strong></p>
					<p>Контактная информация: " . $_POST['contacts'] . "</p>				
				</body>
				</html>";
			
		$from = "From: =?windows-1251?b?" . base64_encode(iconv('utf-8', 'windows-1251', 'Сайт Гриззли96.ру')) . "?= <noreply@" . SITE_SHORT_URL . "> \n";
		$to = "=?windows-1251?b?" . base64_encode(iconv('utf-8', 'windows-1251', 'Администратор')) . "?= <" . $settings['general_email'] . ">";
		$subject = "=?windows-1251?b?" . base64_encode(iconv('utf-8', 'windows-1251', 'Заказ звонка')) . "?=";
		$content = "Content-type: text/html; charset=windows-1251 \n";
		
		$additional_headers = $content . $from;
		
		$a = mail($to, $subject, iconv('utf-8', 'windows-1251', $text), $additional_headers);
		
		header('Location: ' . $backlink . '?success=call-order');	
	}
	elseif ($_POST['action'] == 'medved_order' AND $_POST['key'] == FORM_KEY) {
		$text = "<html>
				 <body>
					<p><strong>Заказ доставки медведя</strong></p>
					<p>Товар: " . $_POST['item'] . "</p>
					<p>Имя: " . $_POST['name'] . "</p>					
					<p>Контактная информация: " . $_POST['contacts'] . "</p>
					<p>Пожелания: " . $_POST['comment'] . "</p>						
				</body>
				</html>";
			
		$from = "From: =?windows-1251?b?" . base64_encode(iconv('utf-8', 'windows-1251', 'Сайт Гриззли96.ру')) . "?= <noreply@" . SITE_SHORT_URL . "> \n";
		$to = "=?windows-1251?b?" . base64_encode(iconv('utf-8', 'windows-1251', 'Администратор')) . "?= <" . $settings['general_email'] . ">";
		$subject = "=?windows-1251?b?" . base64_encode(iconv('utf-8', 'windows-1251', 'Заказ доставки медведя')) . "?=";
		$content = "Content-type: text/html; charset=windows-1251 \n";
		
		$additional_headers = $content . $from;
		
		mail($to, $subject, iconv('utf-8', 'windows-1251', $text), $additional_headers);
		
		header('Location: ' . $backlink . '?success=medved-order');			
	}	
	
	// Передаем в шаблонизатор сообщение об успешной отправке
	if ($_GET['success'] == 'call-order') {
		$smarty->assign('success', 'call_order');			
	}
	elseif ($_GET['success'] == 'medved-order') {
		$smarty->assign('success', 'medved_order');
	}	
}

}

?>