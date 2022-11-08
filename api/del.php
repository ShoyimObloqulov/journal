<?php
	include_once '../config.php';
	$id = $_POST['id'];

	$sql = mysqli_query($link,"DELETE FROM `contact` WHERE id='$id'");
	$r = 0;
	if ($sql) {
		$r = 1;
	}
	echo $r;
?>
