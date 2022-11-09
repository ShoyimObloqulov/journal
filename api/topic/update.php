<?
	include '../../config.php';
	$name = $_POST['name'];
	$id = $_POST['id'];
	$soni = $_POST['jurnal_id'];
	
	$ex = explode('.', $_FILES['file']['name']);
	$file_name = time().$ex;
	$target_file = "../../topic/file/".$file_name;
	$data = date('Y-m-d',time());
	if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
		$sql = mysqli_query($link,"UPDATE `topic` SET `name`='$name',`file`='$file_name',`data`='$data',`jurnal_id`='$soni' WHERE id='$id'");
		if ($sql) {
			print_r("<script>window.location.href='../../admin/topic.php'</script>");
		} else {
			print_r("<script>window.location.href='../../404.php'</script>");
		}
	}else{
		print_r("<script>window.location.href='../../404.php'</script>");
	}
?>