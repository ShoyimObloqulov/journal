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

    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i>Maqola</h1>
          <p>Maqolalarni ko'rish</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">docs</a></li>
        </ul>
      </div>
      <?
        $id = $_GET['id'];
        $sql = mysqli_query($link,"SELECT * FROM `maqola` WHERE id='$id'");
        while($row = mysqli_fetch_assoc($sql)){
      ?>
      <div class="tile">
            <h3 class="tile-title">Annotatsiya</h3>
            <div class="bs-component">
              <div class="alert alert-dismissible alert-warning">
                <button class="close" type="button" data-dismiss="alert">×</button>
                <?=$row['anotatsiya']?>
              </div>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Maqola holati</td>
                  <td>
                    <?
                      if($row['expert_text'] == "" and $row['chop_qil'] == 1){
                        echo '<button class="btn btn-success" type="button" disabled="">Kutilmoqda</button>';
                      }else{
                        echo '<button class="btn btn-success" type="button" disabled="">Qabul qilingan</button>';
                      }
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>To'lov holati</td>
                  <td>
                    <?
                      if($row['tolov_qil'] == ""){
                        echo '<button class="btn btn-danger" type="button" disabled=""> To\'lov amalga oshirilmagan</button>';
                      }else{
                        echo '<button class="btn btn-danger" type="button" disabled=""> To\'lov amalga oshirilgan</button>';
                      }
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>Ekspert</td>
                  <td><?=$row['expert']?></td>
                </tr>
                <tr>
                  <td>Ekspert munosabati</td>
                  <td>
                    <?
                      if($row['expert_text'] == ""){
                        echo '<button class="btn btn-success" type="button" disabled="">Ko\'rib chiqilmoqda</button>';
                      }else{
                        echo $row['qabul_sabab'];
                      }
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>Mualliflar</td>
                  <td><?=$row['mualliflar']?></td>
                </tr>
                <tr>
                  <td>Mavzu</td>
                  <td><?=$row['mavzu']?></td>
                </tr>
                <tr>
                  <td>Jurnal soni</td>
                  <td><?=$row['jurnal_soni']?></td>
                </tr>
                <tr>
                  <td>Maqola</td>
                  <td>
                    <a href="<?=$row['file_name']?>"><i class="fa fa-download"></i> Save</a>
                  </td>
                </tr>
                <tr>
                  <td>Maqola yuborilgan sana(oxirgi yangilanishi)</td>
                  <td><?=$row['sana']?></td>
                </tr>
                <tr>
                  <td>
                    <form action="qabul.php" method="POST" id="qabul">
                      <input type="text" name="id" value="<?=$row['id']?>" hidden>
                      <div class="form-group">
                        <label for="exampleTextarea">Nima uchun qabul qilindi.</label>
                        <textarea class="form-control" name="sabab" id="exampleTextarea" rows="3"></textarea>
                      </div>
                      <button class="btn btn-primary" id="b" type="button"> Adminga yuborish </button>
                    </form>
                  </td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
          <?}?>
    </main>

    <!-- JS -->
    <? include_once 'js.php' ?>
    <script>
      $("#b").click(function(){
        var d = $("#qabul").serializeArray();
        $.ajax({
          url:"qabul.php",
          method:"POST",
          data:d,
          success:function(x){
            if(x == 1){
              swal("Maqola chop qilishga tayor!", "Muofaqiyatli amalga oshirildi.", "success");
              window.location.href='index.php';
            }
          },

        });
        return false;
      });
    </script>
  </body>
</html>