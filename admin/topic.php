<?
  session_start();
  include_once '../config.php';
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
                <h1><i class="fa fa-home"></i> Toplamlar joylash</h1>
                <p>Tizimga chiquvchi barcha mavjud to'plamlar</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="nav-link"><i class="fa fa-home fa-lg">Bosh sahifa</i></a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12 mb-3">
                <button type="button" class="btn btn-primary add" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-plus"></i> Qo'shish</button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Toplam qo'shish</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="../api/topic/add.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">To'plam nomi</label>
                                        <input type="text" class="form-control" placeholder="Nomi..." name="name">
                                    </div>
                                    <div class="form-group">
                                        <label>Jurnal soni</label>
                                        <select class="form-control" name="jurnal_id">
                                            <?
                                              $sql = mysqli_query($link,"SELECT * FROM `jurnal_soni`");
                                              while($wh = mysqli_fetch_assoc($sql)){
                                            ?>
                                            <option value="<?=$wh['id']?>"><?=$wh['name']?></option>
                                            <?}?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Faylni yuklang</label>
                                        <input type="file" accept=".docx,.doc,.pdf" class="form-control-file" name="file">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                        <th>To'plam nomi</th>
                                        <th>Jurnal soni</th>
                                        <th>Hujat</th>
                                        <th>Ammallar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                      $sql = mysqli_query($link,"SELECT * FROM `topic`");
                                      while ($row = mysqli_fetch_assoc($sql)) {
                                    ?>
                                    <tr id="id<?=$row['id']?>">
                                        <td>
                                            <?=$row['name']?>
                                        </td>
                                        <td>
                                            <?
                                              $id=$row['jurnal_id'];
                                              $sel = mysqli_query($link,"SELECT * FROM `jurnal_soni` WHERE id='$id'");
                                              $r = mysqli_fetch_assoc($sel);
                                              echo $r['name'];
                                            ?>
                                        </td>
                                        <td>
                                            <a href="../topic/file/<?=$row['file']?>" download="true">
                                              <button class="btn btn-success"><i class="fa fa-download"></i> Yuklash</button>
                                            </a>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger topic_d" data-row-id="<?=$row['id']?>">
                                              <i class="fa fa-trash"></i>
                                            </button>
                                            <button class="btn btn-info edit" data-row-id="<?=$row['id']?>">
                                                <i class="fa fa-edit"></i>
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
    <script>
    $(function() {
        $(".topic_d").each(function() {
            this.addEventListener("click", function() {
                const rowId = this.dataset.rowId
                console.log(rowId);
                $.ajax({
                    url: "../api/topic/delete.php",
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
                        }else{
                          Swal.fire(
                                'OOPS:(',
                                'Malumot o\'chirishda hatolik',
                                'error'
                            );
                        }
                    }
                });
                return false;
            });
        });

        $(".edit").each(function(){
            this.addEventListener("click", function() {
                const rowId = this.dataset.rowId
                window.location.href="topic_edit.php?id=" + rowId;
            });
        });
    });
    </script>
</body>

</html>