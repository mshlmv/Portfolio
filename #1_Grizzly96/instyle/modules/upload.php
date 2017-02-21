<?php
	global $smarty;
	global $mysql;
	global $url;

	// POST-EDIT часть модуля
	switch ($_POST['action']) {
		case "post" : {
			copy ($_FILES['filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "content/upload/" . $_FILES["filename"]["name"]);

     	 	$size = intval((filesize ($_SERVER['DOCUMENT_ROOT'] . "content/upload/" . $_FILES["filename"]["name"]))/1024);
      		$link = SITE_URL . "/content/upload/" . $_FILES["filename"]["name"];
      		$f_name = explode (".", $_FILES["filename"]["name"]);
      		$type = strtolower($f_name[count($f_name) - 1]);

      		$mysql->query("INSERT INTO `" . TB_PREF . "upload` (`link`, `type`, `size`, `comment`) VALUES ('" . $link . "', '" . $type . "', '" . $size . "', '" . $_POST['comment'] . "')");

       		header("Location: " . SITE_URL . "/instyle/upload/");
       		break;
		}
		case "edit" : {
			if (isset($_POST['delete'])) {
				$file = $mysql->result("SELECT `link` FROM `" . TB_PREF . "upload` WHERE `id` = '" . $_POST['id'] . "'");
				$file = pathinfo($file['link']);
            	unlink ($_SERVER['DOCUMENT_ROOT'] . "content/upload/" . $file["basename"]);

            	$mysql->query("DELETE FROM `" . TB_PREF . "upload` WHERE `id` = '" . $_POST['id'] . "'");
			}
			else {				$mysql->query("UPDATE `" . TB_PREF . "upload` SET `comment` = '" . $_POST['comment'] . "' WHERE `id` = '" . $_POST['id'] . "'");
			}
			header("Location: " . SITE_URL . "/instyle/upload/");
			break;
		}
	}

	//Вывод информации на страницах
	if ($url[3] == "") {
        $upload = $mysql->results("SELECT `id`, `link`, `type`, `comment`, `size`, (SELECT COUNT(`id`) FROM `" . TB_PREF . "upload` WHERE 1) AS `count`, (SELECT SUM(`size`) FROM `" . TB_PREF . "upload` WHERE 1) AS `sum` FROM `" . TB_PREF . "upload` WHERE 1 ORDER BY `id` ASC");

    	$smarty->assign('module', 'upload/index');
	}
	elseif($url[3] == "add") {
    	$smarty->assign('module', 'upload/add');
	}
	elseif (preg_match("/[0-9]+/", $url[3])) {
		$upload = $mysql->result("SELECT * FROM `" . TB_PREF . "upload` WHERE `id` = '" . $url[3] . "'");

    	$smarty->assign('module', 'upload/edit');
	}

	$smarty->assign('upload', $upload);
?>
