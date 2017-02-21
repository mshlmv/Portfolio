<?php
	global $smarty;
	global $mysql;
	global $url;

	// Выводим тизеры
	$teasers = $mysql->results("SELECT `name`, `link`, `image` FROM `teasers` WHERE `image` != '' AND `display` = 'yes' ORDER BY `weight` ASC LIMIT 0,5");
	$smarty->assign('teasers', $teasers);		

	// Выводим статику
	$static = $mysql->result("SELECT `body`, `right_body` FROM `pages` WHERE `link` = '" . $url[count($url)-1] . "' LIMIT 0,1");
 	$smarty->assign('static', $static);

	// Выводим медведей
	$catalog = $mysql->results("SELECT `id`, `site_name` AS `category_name`, `link` FROM `catalog_tags` WHERE `display` = 'yes' ORDER BY `weight` ASC");
	
	if ($catalog != 0) {	
		for ($i=0;$i<count($catalog);$i++) {
			$catalog[$i]['items'] = $mysql->results("SELECT `catalog`.`id`, `catalog`.`name`, `catalog`.`size`, `catalog`.`price`, `catalog`.`sale_price`, `catalog`.`sale`, IF(`catalog`.`sale` = 'yes', `catalog`.`sale_price`, `catalog`.`price`) AS `order_price` FROM `catalog`, `catalog_tags_corr` WHERE `catalog`.`id` = `catalog_tags_corr`.`id_item` AND `catalog_tags_corr`.`id_tag` = '" . $catalog[$i]['id'] . "' AND `catalog`.`display` = 'yes' ORDER BY CAST(`order_price` AS UNSIGNED) ASC");
			
			if ($catalog[$i]['items'] != 0) {
				for ($j=0;$j<count($catalog[$i]['items']);$j++) {
					$catalog[$i]['items'][$j]['images'] = $mysql->results("SELECT `link_sml`, `link_big` FROM `catalog_images` WHERE `id_owner` = '" . $catalog[$i]['items'][$j]['id'] . "' ORDER BY `id` ASC");
				}
			}
		}
		$smarty->assign('catalog', $catalog);
	}

 	$smarty->assign('module', 'main');
?>