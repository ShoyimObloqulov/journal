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
          <h1><i class="fa fa-comment"></i> Elonlar</h1>
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
          <a href="elon_add.php" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Elon qo'shish</a><br>
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>fio</th>
                      <th>Anons</th>
                      <th>Matn</th>
                      <th>Sana</th>
                      <th>Rasm</th>
                      <th>Batafsil</th>
                      <th>Amallar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?
                      $team = mysqli_query($link,"SELECT * FROM `elonlar`");
                      $id = 0;
                      while ($row = mysqli_fetch_assoc($team)) {
                      $id ++;
                    ?>
                    <tr>
                      <td><?=$id?></td>
                      <td><?=$row['name']?></td>
                      <td><?=$row['anons']?></td>
                      <td><?=$row['matn']?></td>
                      <td><?=$row['sana']?></td>
                      <td><img width="100" src="<?=$row['rasm']?>" alt=""></td>
                      <td><?=$row['description']?></td>
                      <td>
                        <form class="mb-1" action="elon_delete.php" method="POST">
                          <input type="text" name="id" value="<?=$row['id']?>" hidden>
                          <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                        </form>
                        <form action="elon_tahrir.php" method="POST">
                          <input type="text" name="id" value="<?=$row['id']?>" hidden>
                          <button class="btn btn-info" type="submit"><i class="fa fa-edit"></i></button>
                        </form>
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