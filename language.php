<?php
	session_start();
	$lang = $_GET['lang'];
	$_SESSION['lang'] = $lang;
	print("<script>window.history.back();</script>");
	exit(0);
?>