<?php require_once "controllerUserData.php"; ?>
<?php

    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    if($email != false && $password != false){
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $run_Sql = mysqli_query($con, $sql);
        if($run_Sql){
            $fetch_info = mysqli_fetch_assoc($run_Sql);
            $status = $fetch_info['status'];
            $code = $fetch_info['code'];
            if($status == "verified"){
                if($code != 0){
                    header('Location: reset-code.php');
                }
            }else{
                header('Location: user-otp.php');
            }
        }
    }else{
        header('Location: login-user.php');
    }
    if($_SESSION['rol'] == "admin"){
        header("location:../admin/");
    }
    if($_SESSION['rol'] == "user"){
        header("location:../user/");
    }
    if($_SESSION['rol'] == "expert"){
        header("location:../expert/");
    }
?>
