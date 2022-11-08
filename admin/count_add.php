<?php 
	include_once '../config.php';
	$name = $_POST['name'];

	$sql = mysqli_query($link,"INSERT INTO `jurnal_soni`(`id`, `name`) VALUES (NULL,'$name')");

	$r = 0;
	if($sql){
		$r = 1;
	}
	echo $r;
?>