<?php
	require("./config.php");
	require ("./smarty.php");

	$content = new instyle_class;
	$authorization_result = $content->authorization();

	$content->display($authorization_result);
?>