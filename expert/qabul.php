<?
	include_once '../config.php';
	$r = 0;
	$id = $_POST['id'];
	$sabab = $_POST['sabab'];
	$sql = mysqli_query($link,"UPDATE `maqola` SET `expert_text`='1',`qabul_sabab`='$sabab' WHERE id='$id'");
	if($sql){
		$r = 1;
	}
	echo $r;
?>