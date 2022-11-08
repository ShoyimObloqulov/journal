<?php
    session_start();
    
    include_once '../config.php';    
?>
<?php
    $ret = [];
    if(isset($_POST['name'])){
        $name = validate($_POST['name']);
        $email = validate($_POST['email']);
        $pass = validate($_POST['password']);
        $povpass = validate($_POST['passwordtwo']);         
        if(strlen($name) < 5){
            $ret += ['error' => 1, "xabar" =>"Malumotlar xato, Bu negadir odam bolasining ismiga o'xshamadi, qaytadan ismga o'xshaganroq ism kiritib ko'rarsiz balki..."];
        } 
        else{
            $sql = mysqli_query($link,"INSERT INTO `user`(`id`, `email`, `password`, `name`, `raqam`, `rol`, `rasm`, `paswordtwo`) VALUES (NULL,'$email','$password','$name','','user','background-best-staff.jpg','$povpass')");
            if ($sql) {
                $_SESSION['rol']="user";
                $_SESSION['name']=$name;
                $_SESSION['email']=$email;
                $_SESSION['img'] = "background-best-staff.jpg";
                $ret += ['error' => 0, "xabar" => "Barchasi joyida. Siz Ro'yhatdan o'tdingiz"];
            }else{
                $ret += ['error' => 1, "xabar" => "Xatolik bo'ldi qaytadan urinib ko'ring"];
            }
        }
    }
    echo json_encode($ret); 
?>