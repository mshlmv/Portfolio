<?php
	require("./instyle/config.php");
	require("./smarty.php");

	global $smarty;

	$constructor = new site_class;
	$constructor->display();
?>