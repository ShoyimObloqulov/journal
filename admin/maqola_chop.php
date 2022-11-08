<?php
	$r = 0;
	if (isset($_POST['id'])) {
		$id = $_POST['id'];
		include_once '../config.php';
		$sql = mysqli_query($link,"UPDATE `maqola` SET `chopqilish`='1' WHERE id='$id'");
		if ($sql) {
			$r = 1;
		}
	}
	echo $r;
?>