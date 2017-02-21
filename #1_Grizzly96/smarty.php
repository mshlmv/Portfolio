<?
// Модуль подключения Smarty
	require_once(SMARTY_DIR . 'Smarty.class.php');
	$smarty = new Smarty();
	$smarty->template_dir = ABS_PATH . '/templates/';
	$smarty->compile_dir = ABS_PATH . '/templates/compile/';
	$smarty->assign('url', $url);
?>
