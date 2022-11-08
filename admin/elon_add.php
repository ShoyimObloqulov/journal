<?
  session_start();
  include_once '../config.php';

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $anons = $_POST['anons'];
    $matn = $_POST['matn'];
    $description = $_POST['description'];
    $t = "../assets/images/news/";
    $target_file = $t.basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES['file']['tmp_name'],$target_file);
    $sql = mysqli_query($link,"INSERT INTO `elonlar`(`id`, `name`, `anons`, `matn`, `rasm`, `description`) VALUES (NULL,'$name','$anons','$matn','$target_file','$description')");
    if($sql){
      header("location:elon.php");
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
          <h1><i class="fa fa-edit"></i> Elon qo'shish</h1>
          <p>Elonlar qo'shish oynasi</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#"> Elon</a></li>
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
                    <label for="exampleTextarea">Anons</label>
                    <textarea class="form-control" id="exampleTextarea" name="anons" rows="1"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea">Elon</label>
                    <textarea class="form-control" id="exampleTextarea" name="matn" rows="2"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea">Description</label>
                    <textarea class="form-control" id="exampleTextarea" name="description" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Rasm yuklash</label>
                    <input class="form-control-file" id="file" type="file" name="file" aria-describedby="fileHelp">
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