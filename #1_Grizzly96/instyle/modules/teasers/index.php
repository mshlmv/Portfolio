<?php
	global $url;
	global $mysql;
	global $smarty;

	$postedit = new postedit_class;

	// POST-EDIT часть модуля
	switch ($_POST['action']) {		case "post" : {
			$new_id = $mysql->auto_increment('teasers');
			
            $teaser = $postedit->teaser_post($_FILES['image']['tmp_name'], $new_id, $_FILES['image']['name']);
			
			if ($_POST['display'] == "") {$_POST['display'] = "no";}
			$mysql->query("INSERT INTO `teasers` (`weight`, `name`, `link`, `image`, `display`) VALUES ('100', '" . $_POST['name'] . "', '" . $_POST['link'] . "', '" . $teaser . "', '" . $_POST['display'] . "')");

			header("Location: " . SITE_URL . "/instyle/teasers/");
       		break;
		}
		case "edit" : {
			if (isset($_POST['delete'])) {
				$teaser = $mysql->result("SELECT `image` FROM `teasers` WHERE `id` = '" . $_POST['id'] . "'");
				$postedit->image_delete($teaser['image']);

				$mysql->query("DELETE FROM `teasers` WHERE `id` = '" . $_POST['id'] . "'");
			}
			else {
				if ($_FILES['image']['tmp_name'] != "") {           	 		$teaser = $postedit->teaser_post($_FILES['image']['tmp_name'], $_POST['id'], $_FILES['image']['name']);
   					$image_query = " `image` = '" . $teaser . "',";
   				}
				
   				$mysql->query("UPDATE `teasers` SET `name` = '" . $_POST['name'] . "', `link` = '" . $_POST['link'] . "'," . $image_query . " `display` = '" . $_POST['display'] . "' WHERE `id` = '" . $_POST['id'] . "'");
			}
			
			header("Location: " . SITE_URL . "/instyle/teasers/");
       		break;
		}
		case "weight_change" : {
			for ($i=0;$i<count($_POST['id']);$i++) {
				$mysql->query("UPDATE `teasers` SET `weight` = '" . $_POST['weight'][$i] . "' WHERE `id` = '" . $_POST['id'][$i] . "'");
			}
			header("Location: " . SITE_URL . "/instyle/teasers/");
			break;
		}
	}

	//Продолжение POST-EDIT, обработчик GET-запросов
	switch ($_GET['action']) {
		case "image_delete" : {
			$teaser = $mysql->result("SELECT `image` FROM `teasers` WHERE `id` = '" . $_GET['id'] . "'");
			$postedit->image_delete($teaser['image']);
			
			$mysql->query("UPDATE `teasers` SET `image` = '' WHERE `id` = '" . $_GET['id'] . "'");
		
			header("Location: " . SITE_URL . "/instyle/teasers/" . $_GET['id']);
			break;
		}
	}

	//Вывод информации на страницах
	if ($url[3] == "") {		$teasers = $mysql->results("SELECT `id`, `weight`, `name` FROM `teasers` WHERE 1 ORDER BY `weight` ASC");

		$smarty->assign('module', 'teasers/index');
	}
	elseif ($url[3] == "add") {
    	$smarty->assign('module', 'teasers/add');
	}
	elseif (preg_match("/^[0-9]+$/", $url[3])) {
    	$teasers = $mysql->result("SELECT * FROM `teasers` WHERE `id` = '" . $url[3] . "'");

    	$smarty->assign('module', 'teasers/edit');
	}

	$smarty->assign('teasers', $teasers);
?>