<?php
	include_once '../config.php';
	$id = $_POST['id'];
	$name = $_POST['name'];

	$r = 0;
	$sql = mysqli_query($link,"UPDATE `jurnal_soni` SET `name`='$name' WHERE id='$id'");

	if ($sql) {
		$r = 1;
	}
	echo $r;
?>