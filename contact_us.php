<?php 
	include_once 'config.php';
	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
	$kim = validate($_POST['kim']);
	$subject = validate($_POST['subject']);	
	$content = validate($_POST['content']);
	$error = 0;
	if(strlen($name) and strlen($email) and strlen($kim) and strlen($subject) and strlen($content) and filter_var($email, FILTER_VALIDATE_EMAIL))
	{	
		
		$sql = mysqli_query($link,"INSERT INTO `contact`(`id`, `name`, `email`, `kim`, `mavzu`, `xabar`) VALUES (NULL,'$name','$email','$kim','$subject','$content')");
		$error = 0;
	}else{
		$error = 1;
	}
	echo $error;
?>