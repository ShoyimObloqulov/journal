<?php
	include_once '../config.php';
	$name =  $_POST['name'];
    $nomer = $_POST['nomer'];
    $yunalish = $_POST['yunalish'];
    $r = 0;
    $sql = mysqli_query($link,"INSERT INTO `expert`(`id`, `fio`, `tel`, `yunalish`) VALUES (NULL,'$name','$nomer','$yunalish')");
    if($sql){
    	$r = 1;
    }
    echo $r;
?>