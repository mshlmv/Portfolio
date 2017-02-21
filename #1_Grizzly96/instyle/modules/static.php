<?php
	global $url;
	global $mysql;
	global $smarty;
	global $url;

	// POST-EDIT часть модуля
	switch ($_POST['action']) {
		case "edit" : {
			$mysql->query("UPDATE `" . TB_PREF . "pages` SET `title` = '" . $_POST['title'] . "', `meta_description` = '" . $_POST['meta_description'] . "', `meta_keywords` = '" . $_POST['meta_keywords'] . "', `body` = '" . $_POST['body'] . "', `right_body` = '" . $_POST['right_body'] . "' WHERE `id` = '" . $_POST['id'] . "'");

			header("Location: " . SITE_URL . "/instyle/static/");
			break;
		}
	}

	//Вывод информации
	if ($url[3] == "") {
		$static = array();
		
		$all_pages = $mysql->results("SELECT `id`, `type`, `name`, ('no') AS `sub` FROM `" . TB_PREF . "pages` WHERE `static` = 'yes' AND `id_owner` = '0' ORDER BY `type` ASC, `weight` ASC");
		
		for ($i=0;$i<count($all_pages);$i++) {
        	$sub_pages = $mysql->results("SELECT `id`, `type`, `name`, ('yes') AS `sub` FROM `" . TB_PREF . "pages` WHERE `static` = 'yes' AND `id_owner` = '" . $all_pages[$i]['id'] . "' ORDER BY `weight` ASC");
			
  			if ($sub_pages == 0) {
  				$tmp[0] = $all_pages[$i];
  				$static = array_merge($static, $tmp);
  			}
  			else {
              	$tmp[0] = $all_pages[$i];
              	$new_static = array_merge($tmp, $sub_pages);
		 		$static = array_merge($static, $new_static);
  			}
		}
		
    	$smarty->assign('module', 'static/index');
	}
	elseif (preg_match("/[0-9]+/", $url[3])) {
		$static = $mysql->result("SELECT * FROM `" . TB_PREF . "pages` WHERE `id` = '" . $url[3] . "'");

    	$smarty->assign('module', 'static/page');
  	}

	$smarty->assign('static', $static);
?>
