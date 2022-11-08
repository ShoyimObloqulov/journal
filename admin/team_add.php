<?
  session_start();
  include_once '../config.php';

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $lavozim = $_POST['lavozim'];
    $face_link = $_POST['face_link'];
    $web_link = $_POST['web_link'];
    $tme_link = $_POST['twitter_link'];
    $qushimcha = $_POST['qushimcha'];
    $ish_joyi = $_POST['ish_joyi'];
    $sana = date("Y-m-d",time());

    $t = "../assets/images/team/";
    $target_file = $t.basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES['file']['tmp_name'],$target_file);
    $sql = mysqli_query($link,"INSERT INTO `team`(`id`, `rasm`, `name`, `lavozim`, `qushimcha`, `ish_joyi`, `sana`, `face_link`, `web_link`, `twitter_link`) VALUES (NULL,'$target_file','$name','$lavozim','$qushimcha','$ish_joyi','$sana','$face_link','$web_link','$tme_link')");
    if($sql){
      header("location:team.php");
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin</title>

    <!-- CSS -->
    <? include_once 'head.php'; ?>
  </head>

  <body class="app sidebar-mini">

    <!-- Navbar-->
    <? include_once 'navbar.php'; ?>


    <!-- Sidebar menu-->
    <? include_once 'sidebar.php'; ?>

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> User edit</h1>
          <p>Userni tahrirlash</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#"> User</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <div class="row">
              <div class="col-lg-12">
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="exampleInputEmail1">FIO</label>
                    <input class="form-control" id="exampleInputEmail1" type="text" name="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Lavozim</label>
                    <input class="form-control" id="exampleInputEmail1" type="text" name="lavozim">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ish joyi</label>
                    <input class="form-control" id="exampleInputEmail1" type="text" name="ish_joyi" >
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea">Azo haqida</label>
                    <textarea class="form-control" id="exampleTextarea" name="qushimcha" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Rasm yuklash</label>
                    <input class="form-control-file" id="file" type="file" name="file" aria-describedby="fileHelp">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">facebook link</label>
                    <input class="form-control" id="exampleInputEmail1" type="text" name="face_link" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">web link</label>
                    <input class="form-control" id="exampleInputEmail1" type="text" name="web_link" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Twitter link</label>
                    <input class="form-control" id="exampleInputEmail1" type="text" name="twitter_link" >
                  </div>
                  
                  <div class="tile-footer">
                    <button class="btn btn-primary" type="submit" name="submit">Saqlash</button>
                  </div>
                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </main>

    <!-- JS -->
    <? include_once 'js.php' ?>
  </body>
</html>