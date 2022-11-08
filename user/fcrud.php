<?
  session_start();
  include '../config.php';
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
          <h1><i class="fa fa-bell-o"></i> Yuborgan maqolalarim</h1>
          <p>Bu oynada siz yuborgan maqolalaringizni ko'rish imkoniyatiga egasiz va maqolaning qabul qilinganlik holatini kuzatib borishingiz mumkin.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="frud.php">Barcha maqolalarim</a></li>
        </ul>
      </div>
      <h3 class="title"><i class="fa fa-text-width"></i> Barcha maqolalar.</h3>
      <div class="row">
        <?
          $id = $_SESSION['id'];
          $sql = mysqli_query($link,"SELECT * FROM `maqola` WHERE user_id='$id'");
          while ($row = mysqli_fetch_assoc($sql)) {
        ?>
        <div class="col-md-6">
          <div class="tile">
            <div class="tile-title-w-btn">
              <?php
                $t = "";
                if(!empty($row['expert'])){
                  $t = "Ko'rilmoqda";
                }else{
                  $t = "Yuborilgan";
                }
              ?>
              <p>Xolat: <span class="text-danger"><?=$t?></span></p>
              <p>Mavzu: <span class="text-primary"><?=$row['mavzu']?></span></p>
              <p><?=$row['anotatsiya']?></p>
              <p><a class="btn btn-primary icon-btn" href="fcrud_delete.php?id=<?=$row['id']?>"><i class="fa fa-trash"></i> Delete</a></p>
            </div>
            <div class="tile-body">
              <div><?=$row['anotatsiya']?></div>
              <p>File: <a href="<?=$row['file_name']?>"><i class="fa fa-download"></i> Download</a></p>
              <a class="btn btn-info" id="demoNotify" href="fcrud_edit.php?id=<?=$row['id']?>"><i class="fa fa-edit"></i> Taxrirlash</a>
            </div>
          </div>
        </div>
        <?}?>
      </div>
    </main>

    <!-- JS -->
    <? include_once 'js.php' ?>
  </body>
</html>