<?
	include_once '../../config.php';
	$id = $_GET['id'];
	$sql = mysqli_query($link,"DELETE * FROM `topic` id='$id'");
	$r = 0;
	if ($sql) {
		$r = 1;
	} 

	echo $r;
	
?>