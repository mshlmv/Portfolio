<?php

// Переменные общего смысла
DEFINE(SITE_URL, 'http://sitena.me');
DEFINE(SITE_SHORT_URL, 'sitena.me');
DEFINE(ABS_PATH, '/home/user/sitena.me/www');

// Переменные для БД
DEFINE(DB_HOST, 'localhost');
DEFINE(DB_USER,	'user');
DEFINE(DB_PASS,	'password');
DEFINE(DB_NAME,	'user');
DEFINE(TB_PREF, '');

// Переменные для Smarty
DEFINE('SMARTY_DIR', ABS_PATH. '/smarty/');

// Переменыне для отправки почты
DEFINE(FORM_KEY, '0a1e0b9d42c69d83f423d7445c10783f');

// Подключаем классы
include("class/mysql.class.php");
include("class/instyle.class.php");
include("class/site.class.php");
include("class/postedit.class.php");

// Подключаем файл с функциями
include("date.php");

// Создаем массив URL
$url_path = parse_url($_SERVER['REQUEST_URI']);
$url = explode("/", $url_path['path']);

for ($i=1;$i<(count($url));$i++) {
	if ($url[$i] == "") {
		unset($url[$i]);
	}
}

?>