<?php
	if (isset($_POST['submit'])) {
		include_once '../config.php';
		$filename = "image/".md5(time());
	    $tempname = $_FILES["file"]["tmp_name"];
	    $folder = "../".md5(time());
	    $sql = "INSERT INTO sayt (rasm) VALUES ('$filename')";
	    // Execute query
	    mysqli_query($link, $sql);

	    if (move_uploaded_file($tempname, $folder)) {
	        echo "<script>alert('Image uploaded successfully!');window.location.href='sayt_add.php'</script>";
	    } else {
	        echo "<script>alert('Failed to upload image!!');window.location.href='sayt_add.php'</script>";
	    }
	}
?>