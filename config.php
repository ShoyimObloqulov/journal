<?php
    $host = "localhost";
    $user = "root";
    $password = "root";
    $db = "journal";

    $link = mysqli_connect($host,$user,$password,$db);


    if(!$link){
        echo "Xatolik ".mysqli_connect_errno().PHP_EOL;
        echo "Xatolik ".mysqli_connect_error().PHP_EOL;
        exit();
    }
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }
     function filter($s){
        $s = str_replace("'", "\'", $s);
        $s = str_replace('#39',"\'",$s);
        return $s;
    }
?>