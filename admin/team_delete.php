<?php
	include_once '../config.php';
	$id = $_GET['id'];
	$sql = mysqli_query($link,"DELETE FROM `team` WHERE id=$id");
	if($sql){
		header("location:team.php");
	}
?>