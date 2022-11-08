<?
  session_start();
  include '../config.php';
  $id = $_GET['id'];
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $lavozim = $_POST['lavozim'];

    $sql = mysqli_query($link,"UPDATE `user` SET `name`='$name',`email`='$email',`rol`='$lavozim' WHERE id='$id'");
    if($sql){
      header("location:user.php");
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
                <form action="" method="POST">
                  <?
                    $sql = mysqli_query($link,"SELECT * FROM `user` WHERE id='$id'");
                    while($rows = mysqli_fetch_assoc($sql)){
                  ?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">FIO</label>
                    <input class="form-control" id="exampleInputEmail1" type="name" name="name" value="<?=$rows['name']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input class="form-control" id="exampleInputEmail1" type="email" name="email" value="<?=$rows['email']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Lavozimi</label>
                    <input class="form-control" id="exampleInputEmail1" type="text" name="lavozim" value="<?=$rows['rol']?>">
                  </div>
                  <div class="tile-footer">
                    <button class="btn btn-primary" type="submit" name="submit">yuborish</button>
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

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  </body>
</html>