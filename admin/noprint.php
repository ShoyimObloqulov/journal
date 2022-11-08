<?
  session_start();
  include '../config.php';
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
          <h1><i class="fa fa-comment"></i> Chop qilinmagan maqolalar</h1>
          <p>Eslatma * Bu yerga qo'yilgan elonlar saytda chiqadi.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">home</li>
          <li class="breadcrumb-item active"><a href="#">Azolar</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <div class="form-group">
                  <select class="form-control mb-3" id="jurnal">
                        <?
                          $jurnal_soni = mysqli_query($link,"SELECT * FROM `jurnal_soni`");
                          while($row = mysqli_fetch_assoc($jurnal_soni)){
                        ?>
                        <option value="<?=$row['id']?>" id="id"><?=$row['name']?></a></option>
                        <?}?>
                  </select>
                </div>
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>Jurnal soni</th>
                      <th>Mavzu</th>
                      <th>Anotatsiya</th>
                      <th>Mualliflar</th>
                      <th>File</th>
                      <th>Holat</th>
                      <th>Amallar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?
                      $id = 0;
                      $sql = mysqli_query($link,"SELECT * FROM `maqola` WHERE chop_qil='0'");
                      while ($row = mysqli_fetch_assoc($sql)) {
                      $id ++;
                    ?>
                    <tr id="satr">
                      <td><?=$id?></td>
                      <td><?=$row['jurnal_soni']?></td>
                      <td><?=$row['mavzu']?></td>
                      <td><?=$row['anotatsiya']?></td>
                      <td><?=$row['mualliflar']?></td>
                      <td><a href="<?=$row['file_name']?>"><i class="fa fa-download"></i> Save</a></td>
                      
                      <td>
                        <?
                          if($row['chop_qil'] == 0 or $row['chop_qil'] == "" or $row['tolov_qil'] != 1){
                            echo '<div class="alert alert-dismissible alert-success"> Ko\'rib chiqilmoqda</div>';
                          }else{
                            echo '<div class="alert alert-dismissible alert-info"> Qabul qilindi</div>';
                          }
                        ?>
                      </td>
                      <td>
                        <a class="btn btn-info" href="document.php?id=<?=$row['id']?>"><i class="fa fa-edit"></i> Ko'rish</a>
                      </td>
                    </tr>
                    <?}?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>


    <!-- JS -->
    <? include_once 'js.php' ?>
    <script>
      $('#satr [data-toggle="popover"]').popover();
      $('#satr [data-toggle="tooltip"]').tooltip();
    </script>

    <script>
      $("#jurnal").change(function(){

        

      });
    </script>
  </body>
</html>