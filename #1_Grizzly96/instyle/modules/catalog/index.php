<?php
	global $mysql;
	global $smarty;
	global $url;

	$postedit = new postedit_class;

	// POST-EDIT часть модуля
	switch ($_POST['action']) {
		case "post" : {
			$new_id = $mysql->auto_increment('catalog');			
			
			// Загружаем изображения
			for ($i=0;$i<count($_FILES['images']['tmp_name']);$i++) {
            	$postedit->catalog_post_image($_FILES['images']['tmp_name'][$i], $new_id);
			}
			
			// Обновляем привязку к тегам	
			if (count($_POST['tags']) != 0) {
				for ($i=0;$i<count($_POST['tags']);$i++) {
					$mysql->query("INSERT INTO `catalog_tags_corr` (`id_item`, `id_tag`) VALUES ('" . $new_id . "', '" . $_POST['tags'][$i] . "')");
				}
			}
			
			if ($_POST['sale'] == '') {$_POST['sale'] = 'no';}
			if ($_POST['display'] == '') {$_POST['display'] = 'no';}
			
			$mysql->query("INSERT INTO `catalog` (
							`name`, `size`, `price`, `sale_price`, `sale`, `display`)
						VALUES (
							'" . $_POST['name'] . "',				
							'" . $_POST['size'] . "',
							'" . $_POST['price'] . "',
							'" . $_POST['sale_price'] . "',
							'" . $_POST['sale'] . "',
							'" . $_POST['display'] . "'
						)");
			
			header('Location: ' . SITE_URL . '/instyle/catalog/');		
			break;
		}
		case "edit":{
			if (isset($_POST['delete'])) {
				$images = $mysql->results("SELECT `link_sml`, `link_big` FROM `catalog_images` WHERE `id_owner` = '" . $_POST['id'] . "'");

				for ($i=0;$i<count($images);$i++) {
					$postedit->image_delete($images[$i]['link_sml']);
					$postedit->image_delete($images[$i]['link_big']);
				}
				
				$mysql->query("DELETE FROM `catalog_images` WHERE `id_owner` = '" . $_POST['id'] . "'");				
				$mysql->query("DELETE FROM `catalog_tags_corr` WHERE `id_item` = '" . $_POST['id'] . "'");
				$mysql->query("DELETE FROM `catalog` WHERE `id` = '" . $_POST['id'] . "'");
				
				header('Location: ' . SITE_URL . '/instyle/catalog/');
				break;
			}
			else {
				// Загружаем изображение
				for ($i=0;$i<count($_FILES['images']['tmp_name']);$i++) {
					$postedit->catalog_post_image($_FILES['images']['tmp_name'][$i], $_POST['id']);
				}	
				
				// Обновляем привязку к тегам		
				$mysql->query("DELETE FROM `catalog_tags_corr` WHERE `id_item` = '" . $_POST['id'] . "'");
				if (count($_POST['tags']) != 0) {
					for ($i=0;$i<count($_POST['tags']);$i++) {
							$mysql->query("INSERT INTO `catalog_tags_corr` (`id_item`, `id_tag`) VALUES ('" . $_POST['id'] . "', '" . $_POST['tags'][$i] . "')");	
						}
				}	
				
				if ($_POST['sale'] == '') {$_POST['sale'] = 'no';}				
				if ($_POST['display'] == '') {$_POST['display'] = 'no';}			
				
				$mysql->query("UPDATE `catalog` SET
										`name` = '" . $_POST['name'] . "',						
										`size` = '" . $_POST['size'] . "',
										`price` = '" . $_POST['price'] . "',
										`sale_price` = '" . $_POST['sale_price'] . "',
										`sale` = '" . $_POST['sale'] . "',
										`display` = '" . $_POST['display'] . "'
									WHERE `id`='" . $_POST['id'] . "'");			
				
				header("Location: " . $_SERVER['HTTP_REFERER']);
			}
			
			break;
		}	
	}

	//Продолжение POST-EDIT, обработчик GET-запросов
	switch ($_GET['action']) {
		case 'image_delete' : {
			$images = $mysql->result("SELECT `link_sml`, `link_big` FROM `catalog_images` WHERE `id` = '" . $_GET['id'] . "'");

			$postedit->image_delete($images['link_sml']);
			$postedit->image_delete($images['link_big']);

			$mysql->query("DELETE FROM `catalog_images` WHERE `id` = '" . $_GET['id'] . "'");
			
			header("Location: " . $_SERVER['HTTP_REFERER']);
			break;
		}
	}

	// Вывод информации
	if ($url[3] == '') {	
		$catalog = $mysql->results("SELECT `id`, `name`, `size`, `price`, `sale_price`, `sale` FROM `catalog` WHERE 1 ORDER BY `name` ASC");
		
		$smarty->assign('module', 'catalog/index');
	}
	elseif($url[3] == 'add'){
		// Теги
		$tags = $mysql->results("SELECT '0' AS `depth`, `id`, `weight`, `name` FROM `catalog_tags` WHERE 1 ORDER BY `weight` ASC");
		$smarty->assign('tags', $tags);
		
		$smarty->assign('module', 'catalog/add');
	}
	elseif (preg_match('/[0-9]+/', $url[3])) {
		$catalog = $mysql->result("SELECT * FROM `catalog` WHERE `id` = '" . $url[3] . "' LIMIT 0,1");
		
		$catalog['tags'] = $mysql->results("SELECT `id_tag` FROM `catalog_tags_corr` WHERE `id_item` = '" . $catalog['id'] . "' ORDER BY `id` ASC");
		
		// Теги
		$tags = $mysql->results("SELECT '0' AS `depth`, `id`, `weight`, `name` FROM `catalog_tags` WHERE 1 ORDER BY `weight` ASC");
		$smarty->assign('tags', $tags);
		
		// Изображения
		$images = $mysql->results("SELECT `id`, `link_sml`, `link_big` FROM `catalog_images` WHERE `id_owner` = '" . $catalog['id'] . "' ORDER BY `id` ASC");
		$smarty->assign('images', $images);		
		
		$smarty->assign('module', 'catalog/edit');
  	}

	$smarty->assign('catalog', $catalog);	
?>
