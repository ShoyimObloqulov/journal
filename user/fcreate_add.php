<?
	session_start();
	include_once '../config.php';
	$errors = [];
	$request = [];
    $jurnal_soni = $_POST['jurnal_soni'];
    $mavzu = $_POST['mavzu'];
    $about = $_POST['about'];
    $mualliflar = $_POST['mualliflar'];
    $id = $_SESSION['id'];

    $target_dir = "../file/";
	$target_file = $target_dir.basename($_FILES["fileinsert"]["name"][0]);

    if (empty($mavzu)) {
    	$errors['mavzu'] = "Mavzu mavjud emas";
    }
    if (empty($about)) {
    	$errors['about'] = "Annotatsiya mavjud emas";
    }
    if (empty($mualliflar)) {
    	$errors['mualliflar'] = "Mualliflar mavjud emas";
    }
    
    if (!empty($errors)) {
	    $request['success'] = false;
	    $request['errors'] = $errors;
	} else {
		move_uploaded_file($_FILES["fileinsert"]["tmp_name"][0], $target_file);
		$sql = mysqli_query($link,"INSERT INTO `maqola`(`id`, `jurnal_soni`, `mavzu`, `anotatsiya`, `mualliflar`, `file_name`,`user_id`) VALUES (NULL,'$jurnal_soni','$mavzu','$about','$mualliflar','$target_file','$id')");
	    $request['success'] = true;
	    $request['message'] = 'Success!';
	}
    echo json_encode($request);
?>