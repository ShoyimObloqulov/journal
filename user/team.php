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
          <h1><i class="fa fa-user"></i> Azolar</h1>
          <p>SamDCHTI «Ilmiy axborotnoma» jurnali tahririyat kengashi va tahririyat hay’ati tarkibi:</p>
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
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>FIO</th>
                      <th>Lavozim</th>
                      <th>Rasm</th>
                      <th>Ish joyi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?
                      $team = mysqli_query($link,"SELECT * FROM `team`");
                      while ($row = mysqli_fetch_assoc($team)) {
                    ?>
                    <tr>
                      <td><?=$row['id']?></td>
                      <td><?=$row['name']?></td>
                      <td><?=$row['lavozim']?></td>
                      <td><img style="width: 60px" src='<?=$row['rasm']?>'></td>
                      <td><?=$row['ish_joyi']?></td>
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