<?php 
	include_once '../config.php';
	$exp_id = $_POST['id'];
	$id = $_POST['id1'];

	$o = mysqli_query($link,"SELECT * FROM `expert` WHERE id='$exp_id'");
	$name = "";
	while($p = mysqli_fetch_assoc($o)){
		$name = $p['fio'];
	}
	$r = 0;
	$sql = mysqli_query($link,"UPDATE `maqola` SET `expert`='$name', `expert_id`='$exp_id' WHERE id='$id'");
	if($sql){
		$r = 1;
	}
	echo $r;
?>