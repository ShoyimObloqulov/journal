<?php 
    include_once '../config.php';
    $text = $_POST['txt'];
    $lang = $_POST['lang'];
    if($lang == "uz"){
        $sql = mysqli_query($link,"UPDATE `privacy` SET `matn_uz`='$text'");
    }
    if($lang == "ru"){
        $sql = mysqli_query($link,"UPDATE `privacy` SET `matn_ru`='$text'");
    }
    if($lang == "eng"){
        $sql = mysqli_query($link,"UPDATE `privacy` SET `matn_eng`='$text'");
    }
    if ($sql) {
        print("<script>window.history.back();</script>");
    }
?>