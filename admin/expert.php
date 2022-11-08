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
                <a class="btn btn-info mb-2" href="expert_add.php" id=""><i class="fa fa-plus"></i> Expert qo'shish</a>
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>FIO</th>
                      <th>Telifon nomer</th>
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
                      <td><?=$row['tel']?></td>
                      <td><?=$row['yunalish']?></td>
                      <td>
                        <form action="expert_tahrir.php" method="POST" class="mb-2">
                          <input type="text" id="id" name="id" value="<?=$row['id']?>" hidden>
                          <button class="btn btn-info" id="edit" type="submit"><i class="fa fa-edit"></i> Tahrirlash</button>
                        </form>
                        <form action="expert_delete.php" method="POST">
                          <input type="text" id="id" name="id" value="<?=$row['id']?>" hidden>
                          <button class="btn btn-danger" id="delete" type="button"><i class="fa fa-trash"></i> Delete</button>
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
      $("#delete").click(function(){
        var id = $("#id").val();
        swal({
            title: "Ishonchingiz komilmi?",
              text: "Hozir bu malumot o'chib ketadi",
              type: "warning",
              showCancelButton: true,
              confirmButtonText: "Ha!",
              cancelButtonText: "Yo'q!",
              closeOnConfirm: false,
              closeOnCancel: false
            }, function(isConfirm) {
                if (isConfirm) {
                  $.ajax({
                    url:"expert_delete.php",
                    method:"POST",
                    data:"id="+id,
                    success:function(x){
                      if(x == 1){
                          swal("O'chirildi!", "Muofaqiyatli amalga oshirildi.", "success");
                          $('#satr' + id).remove();
                      }
                      else{
                        swal("O'chirilmaqdi!", "Data bilan bogliq hatolik.", "success");
                      }
                    }
                  });
                } else {
                    swal("O'chirilmadi", "Bu malumot o'chirilishidan saqlab qoldingiz:)", "error");
                }
            });
        });
    </script>
  </body>
</html>