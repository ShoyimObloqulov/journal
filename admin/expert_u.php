<?php
	include_once '../config.php';
    $id = $_POST['id'];
	$name =  $_POST['name'];
    $nomer = $_POST['nomer'];
    $y = $_POST['yunalish'];
    $r = 0;
    $sql = mysqli_query($link,"UPDATE `expert` SET `fio`='$name',`tel`='$nomer',`yunalish`='$y' WHERE id='$id'");
    print_r($sql);exit();
    if($sql){
    	$r = 1;
    }
    echo $r;
?>