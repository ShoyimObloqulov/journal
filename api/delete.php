<?php
	$id = $_POST['id'];
	include '../config.php';
	$sql = mysqli_query($link,"DELETE FROM `jurnal_soni` WHERE id='$id'");
	$r = 0;
	if ($sql) {
		$r = 1;
	}
	echo $r;
?>