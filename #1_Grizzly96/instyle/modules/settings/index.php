<?php
	global $url;
	global $mysql;
	global $smarty;

	$postedit = new postedit_class;

	// POST-EDIT часть модуля
	switch ($_POST['action']) {		case "edit" : {
			$mysql->query("UPDATE `settings` SET `general_email` = '" . $_POST['general_email'] . "' WHERE 1");
			
			header('Location: ' . SITE_URL . '/instyle/settings/');
			break;
		}
	}

	//Вывод информации на страницах
	if ($url[3] == "") {
		$settings = $mysql->result("SELECT * FROM `settings` WHERE 1 ORDER BY `id` ASC LIMIT 0,1");
		
		$smarty->assign('module', 'settings/index');
	}

	$smarty->assign('settings', $settings);
?>