<?php
	include_once '../config.php';
	$id = $_POST['id'];
	$sql = mysqli_query($link,"DELETE FROM `elonlar` WHERE id=$id");
	if($sql){
		header("location:elon.php");
	}
?>