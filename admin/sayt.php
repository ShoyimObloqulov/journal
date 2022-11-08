<?
  session_start();
  include '../config.php';
  include_once 'session.php';
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
                <h1><i class="fa fa-comment"></i> Slayderga Sayt qo'shish</h1>
                <p>Eslatma * Bu yerga qo'yilgan saytlar saytda chiqadi.</p>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">home</li>
                <li class="breadcrumb-item active"><a href="#">Azolar</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="sayt_add.php" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Sayt qo'shish</a><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="tile">
                    <div class="tile-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Img</th>
                                        <th>Ammal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                      $sql = mysqli_query($link,"SELECT * FROM `sayt`");
                                      while($row = mysqli_fetch_assoc($sql)){
                                    ?>
                                    <tr id="id<?=$row['id']?>">
                                        <td>
                                            <?=$row['id']?>
                                        </td>
                                        <td><img width="100" src="../<?=$row['rasm']?>"></td>
                                        <td><button class="btn btn-danger delete" data-row-id="<?=$row['id']?>"><i class="fa fa-trash"></i></button></td>
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
    $(".delete").each(function() {
        this.addEventListener("click", function() {
            const rowId = this.dataset.rowId
            console.log(rowId);
            Swal.fire({
                title: 'Rosdan ham o\'chirishingizga ishonchingiz komilmi?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Ha',
            }).then((result) => {
                $.ajax({
                    url: "sayt_delete.php",
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
            })
        });
    });
    </script>
</body>

</html>