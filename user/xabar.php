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
                <h1><i class="fa fa-th-list"></i>Xabarlar</h1>
                <p>Adminga yo'langan xabarlarni ko'rish</p>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Maqola</li>
                <li class="breadcrumb-item active"><a href="#">Xabarlar</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="xabar_crud.php" class="btn btn-primary mb-3"> <i class="fa fa-edit"></i> Xabar yozish</a><br>
                <div class="tile">
                    <div class="tile-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Xabar</th>
                                        <th>Amallar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?
                                      $id = $_SESSION['id'];
                                      $xabar = mysqli_query($link,"SELECT * FROM `xabar` WHERE user_id='$id'");
                                      while ($row = mysqli_fetch_assoc($xabar)) {
                                    ?>
                                    <tr id="id<?=$row['id']?>">
                                        <td>
                                            <?=$row['id']?>
                                        </td>
                                        <td>
                                            <?=$row['xabar']?>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger delete" type="button" data-row-id="<?=$row['id']?>"><i class="fa fa-trash"></i> Delete</button>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(".delete").each(function() {
          this.addEventListener("click", function() {
              const rowId = this.dataset.rowId
              $.ajax({
                  url: "xabar_delete.php",
                  method: "POST",
                  data: "id=" + rowId,
                  success: function(x) {
                      if (x == 1) {
                            Swal.fire(
                                  'Good jobs!',
                                  'O\'chirildi',
                                  'success'
                            );
                          $("#id" + rowId).remove();
                      }
                  }
              });
              return false;
          });
        });
    </script>
</body>

</html>