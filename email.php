<?php
	include_once '../config.php'; 
	$email = $_POST['email'];
	$r = 0;
	$sql = mysqli_query($link,"INSERT INTO `email`(`id`, `email`) VALUES (NULL,'$email')");

	if($sql){
		$r = 1;
	}
	echo $r;
?>