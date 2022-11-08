<?php
    session_start();
	include_once '../config.php';
	$r = 0;
	$x = $_POST['xabar'];
	$id = $_SESSION['id'];
	$sql = mysqli_query($link,"INSERT INTO `xabar`(`id`, `xabar`,`user_id`) VALUES (NULL,'$x','$id')");
	if($sql){
		$r = 1;
	}
	echo $r;
?>