<?php
	include_once '../config.php';
	$name = $_POST['name'];
	$email = $_POST['email'];
	$rol = $_POST['rol'];
	$password = password_hash($_POST['password'],PASSWORD_BCRYPT);
	$status = "verified";
	$sql = mysqli_query($link,"INSERT INTO `user`(`id`, `name`, `email`, `status`, `code`, `rol`, `password`) VALUES (NULL,'$name','$email','$status','','$rol','$password')");
	$r = 0;
	if ($sql) {
		$r = 1;
	}
	echo $r;
?>	