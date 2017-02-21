<?
class instyle_class {
var $version = "InStyle 7.0";

// Вывод основного навигационного меню
function general_menu() {	global $mysql;
	global $smarty;

	$general_first[0] = array(
	              	"name" => "Статичная информация",
	              	"link" => "static"
	              );

	$general_first[1] = array(
	              	"name" => "Загрузка файлов",
	              	"link" => "upload"
	              );


	$general_second = $mysql->results("SELECT `name`, `link` FROM `" . TB_PREF . "instyle` WHERE `display` = 'yes' ORDER by `sorting` ASC");

 	$general = array_merge($general_first, $general_second);

  	$smarty->assign('general_menu', $general);
  	$smarty->assign('general_menu_count', count($general));
}

// Вывод основного модуля
function content_generate() {
	global $url;

	if ($url[2] == "") {
   		include ("modules/start.php");
  	}
 	elseif ($url[2] != "" && $url[3] == "") {
   		switch ($url[2]) {
   			case "logout":
   				include ("modules/logout.php");
   				break;
   			case "static":
   				include ("modules/static.php");
   				break;
   			case "upload":
   				include ("modules/upload.php");
   				break;
   			default:
   				include ("modules/" . $url[2] . "/index.php");
   				break;
   		}
  	}
 	elseif ($url[2] != "" && $url[3] != "") {
 		if(file_exists("modules/" . $url[2] . "/" . $url[3] . ".php")) {
 			include ("modules/" . $url[2] . "/".$url[3] . ".php");
 		}
 		elseif ($url[2] == "static") {
 			include ("modules/static.php");
 		}
 		elseif (file_exists("modules/" . $url[2] . "/index.php")) {
   			include ("modules/" . $url[2] . "/index.php");
  		}
  		else {
  			include ("modules/" . $url[2] . ".php");
  		}
  	}
}

// Функция авторизации
function authorization() {
	global $mysql;
	global $url;

	session_start();

	if ($_POST['auth_action'] == "login") {
    	$auth_info = $mysql->result("SELECT * FROM `" . TB_PREF . "instyle_password` WHERE `login` = '" . $_POST['login'] . "' AND `password` = '" . md5($_POST['password']) . "' LIMIT 0,1");

		$_SESSION['user_instyle'] = $auth_info['id'];
		$_SESSION['password_instyle'] = md5($auth_info['password']);

        $mysql->query("DELETE FROM `" . TB_PREF . "instyle_sessions` WHERE `id_user` = '" . $_SESSION['user_instyle'] . "'");
		$mysql->query("INSERT INTO `" . TB_PREF . "instyle_sessions` (`id_user`, `lastactivity`, `sessionhash`, `passwordhash`) VALUES ('" . $_SESSION['user_instyle'] . "', UNIX_TIMESTAMP(), '" . md5(session_id()) . "', '" . $_SESSION['password_instyle'] . "')");

    	header("Location: http://" . $_SERVER['HTTP_HOST'] . "/instyle/");
  	}
 	elseif ($url[2] == "logout") {
   		$mysql->query("DELETE FROM `" . TB_PREF . "instyle_sessions` WHERE `id_user` = '" . $_SESSION['user_instyle'] . "'");

        session_unset();
		session_regenerate_id();

   		header("Location: http://" . $_SERVER['HTTP_HOST'] . "/instyle/");
  	}
 	else {
   		$auth_info = $mysql->result("SELECT * FROM `" . TB_PREF . "instyle_sessions` WHERE `id_user` = '" . $_SESSION['user_instyle'] . "'");

   		if (($auth_info['id_user'] == $_SESSION['user_instyle']) and ($auth_info['lastactivity'] > (time("NOW") - 1440)) and ($auth_info['sessionhash'] == md5(session_id())) and ($auth_info['passwordhash'] == $_SESSION['password_instyle'])) {
     		$mysql->query("UPDATE `" . TB_PREF . "instyle_sessions` SET `lastactivity` = UNIX_TIMESTAMP() WHERE `id_user` = '" . $_SESSION['user_instyle'] . "'");
     		$authorization_result = 1;
    	}
   		else {
     		$authorization_result = 0;
    	}
  	}

	return $authorization_result;
}

function display($authorization_result) {
	global $smarty;
	global $url;

 	if ($authorization_result == 1) {
  		$this->general_menu();
  		$this->content_generate();

    	$smarty->assign('url', $url);
    	$smarty->display("index.tpl");
 	}
 	else { 		$smarty->display("auth.tpl");
 	}
}

// Функция вывода "человеческой" даты
function humane_datetime($date) {	global $month_array;

 	if ($date != "") {
		$tod_beg = mktime(0,0,0,date(m, mktime()), date(j, mktime()), date(Y, mktime()));
		$tod_end = mktime(23,59,59,date(m, mktime()), date(j, mktime()), date(Y, mktime()));

		$yes_end = $tod_beg - 1;
		$yes_beg = $yes_end - 86399;

		$tom_beg = $tod_end + 1;
		$tom_end = $tom_beg + 86399;


		if ($yes_beg < $date && $date < $yes_end) {
			$humane_date = "Вчера, ".date(H, $date).":".date(i, $date);
		}
		elseif ($tod_beg < $date && $date < $tod_end) {
			$humane_date = "Сегодня, ".date(H, $date).":".date(i, $date);
		}
		elseif ($tom_beg < $date && $date < $tom_end) {
			$humane_date = "Завтра, ".date(H, $date).":".date(i, $date);
		}
		else {
			$humane_date = date(j, $date)." ".$month_array[date(n, $date)]." ".date(Y, $date).", ".date(H, $date).":".date(i, $date);
		}
    }

	return $humane_date;
}

// Функция вывода "человеческой" даты без времени
function humane_date($date) {
	global $month_array;

 	if ($date != "") {
		$tod_beg = mktime(0,0,0,date(m, mktime()), date(j, mktime()), date(Y, mktime()));
		$tod_end = mktime(23,59,59,date(m, mktime()), date(j, mktime()), date(Y, mktime()));

		$yes_end = $tod_beg - 1;
		$yes_beg = $yes_end - 86399;

		$tom_beg = $tod_end + 1;
		$tom_end = $tom_beg + 86399;


		if ($yes_beg < $date && $date < $yes_end) {
			$humane_date = "Вчера";
		}
		elseif ($tod_beg < $date && $date < $tod_end) {
			$humane_date = "Сегодня";
		}
		elseif ($tom_beg < $date && $date < $tom_end) {
			$humane_date = "Завтра";
		}
		else {
			$humane_date = date(j, $date) . " " . $month_array[date(n, $date)] . " " . date(Y, $date);
		}
    }

	return $humane_date;
}

// Функция вывода "человеческой" даты без времени и года
function humane_short_date($date) {
	global $month_array;

 	if ($date != "") {
		$tod_beg = mktime(0,0,0,date(m, mktime()), date(j, mktime()), date(Y, mktime()));
		$tod_end = mktime(23,59,59,date(m, mktime()), date(j, mktime()), date(Y, mktime()));

		$yes_end = $tod_beg - 1;
		$yes_beg = $yes_end - 86399;

		$tom_beg = $tod_end + 1;
		$tom_end = $tom_beg + 86399;


		if ($yes_beg < $date && $date < $yes_end) {
			$humane_date = "Вчера";
		}
		elseif ($tod_beg < $date && $date < $tod_end) {
			$humane_date = "Сегодня";
		}
		elseif ($tom_beg < $date && $date < $tom_end) {
			$humane_date = "Завтра";
		}
		else {
			$humane_date = date(j, $date) . " " . $month_array[date(n, $date)];
		}
    }

	return $humane_date;
}

// Генерируем и передаем в smarty текущее время
function current_date() {
	global $smarty;

	$current_date['day'] = date("j", time());
	$current_date['month'] = date("n", time());
	$current_date['year'] = date("Y", time());

	$smarty->assign('current_date', $current_date);
}

}

?>
