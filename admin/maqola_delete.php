<?php
	$r = 0;
	if (isset($_POST['id'])) {
		include_once '../config.php';
		$id = $_POST['id'];
		$sql = mysqli_query($link,"DELETE FROM `maqola` WHERE id='$id'");
		if ($sql) {
			$r = 1;
		}
	}
	echo $r;
?>

