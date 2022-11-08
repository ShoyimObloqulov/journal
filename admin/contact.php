<?
  session_start();
  include_once '../config.php';
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
          <h1><i class="fa fa-telegram"></i> Contact</h1>
          <p> Saytda yo'langan xabarlarni ko'rish</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item active"><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
        
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>name</th>
                      <th>email</th>
                      <th>xabar</th>
                      <th>Amallar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?
                      $xabar = mysqli_query($link,"SELECT * FROM `contact`");
                      while ($row = mysqli_fetch_assoc($xabar)) {
                    ?>
                    <tr id="id<?=$row['id']?>">
                      <td><?=$row['id']?></td>
                      <td><?=$row['name']?></td>
                      <td><?=$row['email']?></td>
                      <td><?=$row['xabar']?></td>
                      <td>
                          <button type="button" class="btn btn btn-primary del" data-row-id="<?=$row['id']?>">
                            <i class="fa fa-trash"></i>
                          </button>
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
  </body>
</html>