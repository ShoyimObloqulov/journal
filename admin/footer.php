<?
  session_start();
  include_once '../config.php';

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $face_link = $_POST['face_link'];
    $web_link = $_POST['web_link'];
    $tme_link = $_POST['tme_link'];
    $nomer = $_POST['nomer'];
    $suz = $_POST['suz'];
    $location = $_POST['location'];
    $sql = mysqli_query($link,"UPDATE `footer` SET `name`='$name',`email`='$email',`face_link`='$face_link',`web_link`='$web_link',`tme_link`='$tme_link',`nomer`='$nomer',`suz`='$suz', `location`='$location' WHERE 1");

    if($sql){
      header("location:footer.php");
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>User Admin</title>

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
                <form action="" method="POST">
                  <?
                    $sql = mysqli_query($link,"SELECT * FROM `footer`");
                    while($rows = mysqli_fetch_assoc($sql)){
                  ?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">name</label>
                    <input class="form-control" id="exampleInputEmail1" type="name" name="name" value="<?=$rows['name']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input class="form-control" id="exampleInputEmail1" type="email" name="email" value="<?=$rows['email']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Facebook link</label>
                    <input class="form-control" id="exampleInputEmail1" type="text" name="face_link" value="<?=$rows['face_link']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">web link</label>
                    <input class="form-control" id="exampleInputEmail1" type="text" name="web_link" value="<?=$rows['web_link']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Telegram link</label>
                    <input class="form-control" id="exampleInputEmail1" type="text" name="tme_link" value="<?=$rows['tme_link']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomer</label>
                    <input class="form-control" id="exampleInputEmail1" type="text" name="nomer" value="<?=$rows['nomer']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">So'z</label>
                    <input class="form-control" id="exampleInputEmail1" type="text" name="suz" value="<?=$rows['suz']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Joylashuv</label>
                    <input class="form-control" id="exampleInputEmail1" type="text" name="location" value="<?=$rows['location']?>">
                  </div>
                  <div class="tile-footer">
                    <button class="btn btn-primary" type="submit" name="submit">Yangilash</button>
                  </div>
                  <?}?>
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