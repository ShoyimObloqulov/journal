<?php
	$directoryURI = $_SERVER['REQUEST_URI'];
	$path = parse_url($directoryURI, PHP_URL_PATH);
	$components = explode('/', $path);
	$first_part = $components[1];
	if ($first_part != $_SESSION['rol']) {
		header("location:../404.php");
	}
?>