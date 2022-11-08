<?php

	if (isset($_POST['id'])) {
		$id = $_POST['id'];
		$mavzu = $_POST['mavzu'];
		$mualliflar = $_POST['mualliflar'];
		$decs = $_POST['decs'];
		$jurnal_soni = $_POST['jurnal_soni'];

		$sana = date('Y',time());
		$vaqt = date('Y-m-d h:i:s',time());
		$file = "../maqolalar/";
	    $name = $_FILES['file']['name'];
	    $data = $_FILES['file']['tmp_name'];
	    $file_name = "maqolalar/".md5(time()).$name;

	    if(move_uploaded_file($data,$file.md5(time()).$name)){
	    	include_once '../config.php';
	    	$sql = mysqli_query($link,"UPDATE `maqola` SET `jurnal_soni`='$jurnal_soni',`mavzu`='$mavzu',`anotatsiya`='$anotatsiya',`mualliflar`='$mualliflar',`file_name`='$file_name' WHERE id='$id'");
	    	if ($sql) {
	    		header("location:all.php");
	    	}
	    	else{
	    		header("location:../404.php");
	    	}
	    }else{
	    	header("location:all.php");
	    }
	}
?>