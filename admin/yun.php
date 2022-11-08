<?
  session_start();
  include_once '../config.php';
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
    <!-- Main -->

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Expertlar</h1>
          <p>Expertlarni boshqarish oynasi</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Boshqaruv</li>
          <li class="breadcrumb-item active"><a href="#">Expertlar</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <a class="btn btn-info mb-2" href="#" id=""> Barcha expertlar</a>
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>FIO</th>
                      <th>Yo'nalish</th>
                      <th>Amallar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?
                      $sql = mysqli_query($link,"SELECT * FROM `expert`");
                      $id = 0;
                      while ($row = mysqli_fetch_assoc($sql)) {
                      $id ++;
                    ?>
                    <tr id="satr<?=$row['id']?>">
                      <td><?=$id?></td>
                      <td><?=$row['fio']?></td>
                      <td><?=$row['yunalish']?></td>
                      <td>
                        <form action="yun_c.php" method="POST" id="form" class="mb-2">
                          <input type="text" id="id" name="id" value="<?=$row['id']?>" hidden>
                          <input type="text" id="id1" name="id1" value="<?=$_GET['id']?>" hidden>
                          <button class="btn btn-info" id="yun" type="submit"><i class="fa fa-edit"></i> Yuborish</button>
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
    <script>
      $("#yun").click(function() {
        var data = $("#form").serializeArray();

        $.ajax({
          url:"yun_c.php",
          method:"POST",
          data:data,
          success:function(x){
            if(x == 1){
              swal("Yuborildi!", "Muofaqiyatli amalga oshirildi.", "success");
              window.location.href='maqola.php';
            }
          },
        });
        return false;
      });
    </script>

  </body>
</html>