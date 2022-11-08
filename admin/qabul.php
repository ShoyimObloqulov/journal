<?
	include_once '../config.php';
	$r = 0;
	$id = $_POST['id'];
	$sql = mysqli_query($link,"UPDATE `maqola` SET `chop_qil`='1' WHERE id='$id'");
	if($sql){
		$r = 1;
	}
	echo $r;
?>