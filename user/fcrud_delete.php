<?php
	include_once '../config.php';
	$id = $_GET['id'];
	$sql = mysqli_query($link,"DELETE FROM `maqola` WHERE id='$id'");
	if($sql){
		header("location:fcrud.php");
	}
?>