<?php
	include_once '../config.php';
	$id = $_POST['id'];
    $jurnal_soni = $_POST['jurnal_soni'];
    $mavzu = $_POST['mavzu'];
    $about = $_POST['about'];
    $mualliflar = $_POST['mualliflar'];
    $anotatsiya = $_POST['anotatsiya'];

    $sql = mysqli_query($link,"UPDATE `maqola` SET `jurnal_soni`='$jurnal_soni',`mavzu`='$mavzu',`anotatsiya`='$anotatsiya',`mualliflar`='$mualliflar',`file_name`='$file_name' WHERE id='$id'");

    if($sql){
    	print("<script>window.location.href='../user/fcrud.php';</script>");
    }
?>