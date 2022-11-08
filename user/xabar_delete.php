<?php
	include_once '../config.php';
	$id = $_POST['id'];
	$r = 0;
	$sql = mysqli_query($link,"DELETE FROM `xabar` WHERE id='$id'");
	if ($sql) {
		$r = 1;
	} 
	echo $r;
?>