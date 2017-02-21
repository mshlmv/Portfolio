<?php
	global $smarty;
	global $url;
	global $mysql;

	$postedit = new postedit_class;

	// POST-EDIT часть модуля
	switch ($_POST['action']) {
		case 'post' : {
			$new_id = $mysql->auto_increment('catalog_tags');

			if ($_POST['display'] == '') {$_POST['display'] = 'no';}		
			
			$mysql->query("INSERT INTO `catalog_tags` (`weight`, `name`, `site_name`, `link`, `display`) VALUES ('100', '" . $_POST['name'] . "', '" . $_POST['site_name'] . "', '" . $_POST['link'] . "', '" . $_POST['display'] . "')");
			
			header('Location: ' . SITE_URL . '/instyle/catalog-tags/');
       		break;
		}
		case 'edit' : {
			if (isset($_POST['delete'])) {				
				$mysql->query("DELETE FROM `catalog_tags_corr` WHERE `id_tag` = '" . $_POST['id'] . "'");				
				$mysql->query("DELETE FROM `catalog_tags` WHERE `id` = '" . $_POST['id'] . "'");
			}
			else {
				if ($_POST['display'] == '') {$_POST['display'] = 'no';}
				
				$mysql->query("UPDATE `catalog_tags` SET `name` = '" . $_POST['name'] . "', `site_name` = '" . $_POST['site_name'] . "', `link` = '" . $_POST['link'] . "', `display` = '" . $_POST['display'] . "' WHERE `id` = '" . $_POST['id'] . "'");
			}
			
			header('Location: ' . SITE_URL . '/instyle/catalog-tags/');
			break;
		}
		case 'weight_change' : {
			for ($i=0;$i<count($_POST['id']);$i++) {
				$mysql->query("UPDATE `catalog_tags` SET `weight` = '" . $_POST['weight'][$i] . "' WHERE `id` = '" . $_POST['id'][$i] . "'");
			}
			
			header('Location: ' . SITE_URL . '/instyle/catalog-tags/');
			break;
		}
	}

	if ($url[3] == '') {
		$tags = $mysql->results("SELECT `id`, `weight`, `name` FROM `catalog_tags` WHERE 1 ORDER BY `weight` ASC");
		
		$smarty->assign('module', 'categories/index');
	}
	elseif ($url[3] == 'add') {		$smarty->assign('module', 'categories/add');
	}
	elseif (preg_match('/^[0-9]+$/', $url[3])) {		$tags = $mysql->result("SELECT * FROM `catalog_tags` WHERE `id` = '" . $url[3] . "' LIMIT 0,1");
		
		$smarty->assign('module', 'categories/edit');
	}

	$smarty->assign('tags', $tags);
?>