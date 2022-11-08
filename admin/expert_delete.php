<?
	include_once '../config.php';
	$id = $_POST['id'];

	$sql = mysqli_query($link,"DELETE FROM `expert` WHERE id='$id'");
	$r = 0;
	if($sql){
		$r = 1;
	}
	echo $r;
?>