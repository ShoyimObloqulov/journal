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
          <h1><i class="fa fa-file-code-o"></i> Maqola yuborish</h1>
          <p>Eslatma : * - to'ldirilishi lozim maydonlar. Maydonlarni kiritishda eslatmalarga e'tibor bering.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="index.php">Maqola qo'shish</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <?php
              $id = $_GET['id'];
              $sorov = mysqli_query($link,"SELECT * FROM `maqola` WHERE id='$id'");
              while ($rows = mysqli_fetch_assoc($sorov)) {
            ?>
            <div class="row">
              <div class="col-lg-12">
                <form action="../api/frud_edit.php" method="POST" id="form" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="exampleSelect1">Jurnalning qaysi soniga maqola yubormoqchisiz *</label>
                    <select class="form-control" name="jurnal_soni" id="jurnal_soni">
                      <?
                        $sql = mysqli_query($link,"SELECT * FROM `jurnal_soni`");
                        while ($row = mysqli_fetch_assoc($sql)) {
                      ?>
                      <option><?=$row['name'];?></option>
                      <?}?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Maqola mavzusi *</label>
                    <input class="form-control" name="mavzu" id="mavzu" type="text" value="<?=$rows['mavzu']?>">
                  </div>
                  <input type="text" name="id" value="<?=$rows['id']?>" hidden>
                  <div class="form-group">
                    <label for="exampleTextarea">Annotatsiya *</label>
                    <textarea id="ano" class="form-control about" name="anotatsiya">
                      <?=$rows['anotatsiya']?>
                    </textarea>
                  </div>
                  
                  <script src="../ckeditor/ckeditor.js"></script>
    
                  <script>
                      CKEDITOR.replace( 'ano' );
                  </script>
                  <input type="text" id="about" name="about" hidden>
                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Mualliflar *</label>
                    <input class="form-control" name="mualliflar" id="mualliflar" type="text" value="<?=$rows['mualliflar']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Maqolangizni yuklang *</label>
                    <input class="form-control-file" name="fileinsert" id="fileinsert" type="file" aria-describedby="fileHelp" accept=".docx, .doc,.pdf">
                  </div>
                  <button class="btn btn-primary" name="submit" id="button" type="submit">Yuborish</button>
                </form>
                

              </div>
              
            </div>
            <?}?>
          </div>
        </div>
      </div>
    </main>
    <!-- JS -->
    
    <? include_once 'js.php' ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>
</html>