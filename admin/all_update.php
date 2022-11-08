<?php
    include_once '../config.php';
	$mavzu = validate($_POST['mavzu']);
	$mualliflar = validate($_POST['mualliflar']);
	$decs = validate($_POST['decs']);
	$jurnal_soni = validate($_POST['jurnal_soni']);

	$sana = date('Y',time());
	$vaqt = date('Y-m-d h:i:s',time());
	$file = "../maqolalar/";
    $name = $_FILES['file']['name'];
    $data = $_FILES['file']['tmp_name'];
    $file_name = "maqolalar/".md5(time());
    $id = $_SESSION['id'];
    if(move_uploaded_file($data,$file.md5(time()).$name)){
    	$sql = mysqli_query($link,"INSERT INTO `maqola`(`id`,`jurnal_soni`, `mavzu`, `anotatsiya`, `mualliflar`, `file_name`, `user_id`, `expert`, `expert_text`, `expert_id`, `chop_qil`, `tolov_qil`, `sana`, `qabul`, `qabul_sabab`, `vaqt`,`admin`,`chopqilish`) VALUES (NULL,$jurnal_soni','$mavzu','$decs','$mualliflar','$file_name','$id','','','','0','0','$sana','0','','$vaqt','1','0')");
    	if ($sql) {
    		header("location:all.php");
    	}
    	else{
    		header("location:../404.php");
    	}
    }
?>