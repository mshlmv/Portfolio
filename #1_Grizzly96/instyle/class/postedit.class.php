<?
class postedit_class {
//Функция загрузки фотографий для каталога
function catalog_post_image($src, $item_id) {
	global $mysql;

	if ($src != '') {
 		$image_info = getimagesize ($src);
  		list($src_W, $src_H) = $image_info;

		$res_sml_W = 300;
		$res_sml_H = $res_sml_W * $src_H / $src_W;
	
		$res_big_W = 900;
		$res_big_H = $res_big_W * $src_H / $src_W;
		
  		$img_source = ImageCreateFromJpeg($src);
		
  		//Формируем малое изображение
		$image = new Imagick($src);
        $image->setCompression(Imagick::COMPRESSION_JPEG);
        $image->setCompressionQuality(90);		
		$image->resizeImage($res_sml_W, $res_sml_H, imagick::FILTER_LANCZOS, 1, true);
		$image->writeImage(ABS_PATH . '/content/catalog_sml' . $item_id . '_' . basename($src . '.jpg'));
		$image->destroy();				
		
  		//Формируем большое изображение
		$image = new Imagick($src);
        $image->setCompression(Imagick::COMPRESSION_JPEG);
        $image->setCompressionQuality(90);		
		$image->resizeImage($res_big_W, $res_big_H, imagick::FILTER_LANCZOS, 1, true);
		$image->writeImage(ABS_PATH . '/content/catalog_big' . $item_id . '_' . basename($src . '.jpg'));
		$image->destroy();
		
  		$link_sml =  '/content/catalog_sml' . $item_id . '_' . basename($src . '.jpg');
  		$link_big =  '/content/catalog_big' . $item_id . '_' . basename($src . '.jpg');
		
		unset($img_source);
		
  		$mysql->query("INSERT INTO `catalog_images` (`id_owner`, `link_sml`, `link_big`) VALUES ('" . $item_id . "', '" . $link_sml . "', '" . $link_big . "')");
	}
}

// Функция загрузки тизеров
function teaser_post($src, $item_id, $fullname) {
	global $mysql;

	if ($src != '') {
		$file = pathinfo($fullname);
		
		copy ($src, ABS_PATH . '/content/teaser' . $item_id . '_' . basename($src . '.' . $file['extension']));
		
		$link = SITE_URL . '/content/teaser' . $item_id . '_' . basename($src . '.' . $file['extension']);
		
		return($link);
	}
}

//Функция удаления изображений
function image_delete ($link) {
	if ($link != "") {		$img_path =  ABS_PATH . '/content/' . basename($link);
		@unlink ($img_path);
	}
}

//Функция удаления файлов
function file_delete ($link) {
	if ($link != "") {
		$file_path =  ABS_PATH . '/content/files/' . basename($link);
		@unlink ($file_path);
	}
}

// Функция транслитерации имен файлов
function filename_transliteration($filename) {
	 $converter = array(
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '',    'ы' => 'y',   'ъ' => '',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

        'А' => 'A',   'Б' => 'B',   'В' => 'V',
        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
        'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
        'И' => 'I',   'Й' => 'Y',   'К' => 'K',
        'Л' => 'L',   'М' => 'M',   'Н' => 'N',
        'О' => 'O',   'П' => 'P',   'Р' => 'R',
        'С' => 'S',   'Т' => 'T',   'У' => 'U',
        'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
        'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
        'Ь' => ' ',   'Ы' => 'Y',   'Ъ' => '',
        'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',

        ' ' => '_'
    );

return strtr($filename, $converter);
}

}

?>
