<?
	include '../../config.php';
	$name = $_POST['name'];
	$soni = $_POST['jurnal_id'];
	
	$file_name = time();
	$target_file = "../../topic/file/".$file_name;
	$data = date('Y-m-d',time());
	if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
		$sql = mysqli_query($link,"INSERT INTO `topic`(`id`, `name`, `file`, `data`, `jurnal_id`) VALUES (NULL,'$name','$file_name','$data','$soni')");
		if ($sql) {
			print_r("<script>history.back();</script>");
		} else {
			print_r("<script>window.location.href='../../404.php'</script>");
		}
	}else{
		print_r("<script>window.location.href='../../404.php'</script>");
	}
?>