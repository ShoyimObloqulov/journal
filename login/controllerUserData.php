<?php 
session_start();
require "connection.php";
$email = "";
$name = "";
$errors = array();
//if user signup button
if(isset($_POST['signup'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($password !== $cpassword){
        $errors['password'] = "Parol mos kelmasligini tasdiqlang!, Qaytadan terilgan parol bir xil bo'lsin";
    }
    $email_check = "SELECT * FROM user WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Siz kiritgan elektron pochta allaqachon mavjud!";
    }
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $rol = "user";
        $insert_data = "INSERT INTO user (name, email, password, code, status,rol)
                        values('$name', '$email', '$encpass', '$code', '$status','$rol')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){
            $subject = "Elektron pochtani tasdiqlash kodi";
            $message = "Tasdiqlash kodingiz $code";
            $sender = "From: scientificjournaljssr@gmail.com";
            if(mail($email, $subject, $message, $sender)){
                $info = "Elektron pochtangizga tasdiqlash kodini yubordik - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $name;
                $_SESSION['rol'] = "user";
                $_SESSION['password'] = $password;
                header('location: user-otp.php');
                exit();
            }else{
                $errors['otp-error'] = "Kod yuborilmadi!";
            }
        }else{
            $errors['db-error'] = "Maʼlumotlar bazasiga maʼlumotlarni kiritishda xatolik yuz berdi!";
        }
    }

}
    //if user click verification code submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM user WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE user SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
                $_SESSION['email'] = $email;
                header('location: index.php');
                exit();
            }else{
                $errors['otp-error'] = "Kodni yangilash amalga oshmadi!";
            }
        }else{
            $errors['otp-error'] = "Siz noto'g'ri kod kiritdingiz!";
        }
    }

    //if user click login button
    if(isset($_POST['login'])){

        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $_SESSION['email']=$email;


        $check_email = "SELECT * FROM user WHERE email = '$email'";
        $res = mysqli_query($con, $check_email);
        if(mysqli_num_rows($res) > 0){
            
            $fetch = mysqli_fetch_assoc($res);      
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $status = $fetch['status'];
                $_SESSION['rol'] = $fetch['rol'];
                if($status == 'verified'){
                  $_SESSION['email'] = $email;
                  $_SESSION['name'] = $fetch['name'];
                  $_SESSION['password'] = $password;
                  $_SESSION['rol'] = $fetch['rol'];
                  $_SESSION['id']=$fetch['id'];
                  if ($fetch['rol'] == "admin") {
                      header("location:../admin");
                  } else if ($fetch['rol'] == "user") {
                      header("location:../user/");
                  } else if($fetch['rol'] == "expert"){
                      header("location:../expert/");
                  }else{
                    header("location:../index.php/");
                  }
                  
                }else{
                    $info = "E-pochtangizni hali tasdiqlamaganga o‘xshaysiz - $email";
                    $_SESSION['info'] = $info;
                    header('location: user-otp.php');
                }
            }else{
                $errors['email'] = "Noto'g'ri elektron pochta yoki parol!";
            }
        }else{
            $errors['email'] = "Siz hali aʼzo boʻlmaganga oʻxshaysiz! Ro'yxatdan o'tish uchun pastki havolani bosing.";
        }
    }

    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM user WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE user SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                $subject = "Parolni tiklash kodi";
                $message = "Parolni tiklash kodingiz $code";
                $sender = "From: scientificjournaljssr@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "Biz sizning e-pochtangizga parolni o'zgartirish to'g'risida xabar yubordik- $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    $_SESSION['name']=$name;
                    header('location: reset-code.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Kod yuborilmadi!";
                }
            }else{
                $errors['db-error'] = "Nimadir noto'g'ri bajarildi!";
            }
        }else{
            $errors['email'] = "Bu elektron pochta manzili mavjud emas!";
        }
    }

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM user WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $name = $fetch_data['name'];
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $name;
            $info = "Iltimos, boshqa saytlarda foydalanmaydigan yangi parol yarating.";
            $_SESSION['info'] = $info;
            header('location: new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "Siz noto'g'ri kod kiritdingiz!";
        }
    }

    //if user click change password button
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        $name = mysqli_real_escape_string($con,$_SESSION['name']);
        if($password !== $cpassword){
            $_SESSION['name']=$_POST['name'];
            $errors['password'] = "Parol mos kelmasligini tasdiqlang!";
        }else{
            $_SESSION['name']=$_POST['name'];
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $encpass = password_hash($password, PASSWORD_BCRYPT);
            $update_pass = "UPDATE user SET code = $code, password = '$encpass' WHERE email = '$email'";
            $run_query = mysqli_query($con, $update_pass);
            if($run_query){
                $info = "Parolingiz o'zgartirildi. Endi siz yangi parolingiz bilan tizimga kirishingiz mumkin.";
                $_SESSION['info'] = $info;
                header('Location: password-changed.php');
            }else{
                $errors['db-error'] = "Parolingizni o'zgartirib bo'lmadi!";
            }
        }
    }
    
   //if login now button click
    if(isset($_POST['login-now'])){
        header('Location: login-user.php');
    }

?>