<?
  session_start();
  include '../config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <style>
        .col {
            background-color: #fff;
            padding: 10px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
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
                <h1><i class="fa fa-comment"></i> Jurnal soni</h1>
                <p>Jurnal sonini kiritish</p>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">home</li>
                <li class="breadcrumb-item active"><a href="#">jurnal soni</a></li>
            </ul>
        </div>
        <div class="col-md-6">
            <div class="tile">
                <div class="tile-body">
                    <form class="form-horizontal" action="count_add.php" method="POST" id="addform">
                        <div class="form-group row">
                            <label class="control-label col-md-3">Jurnal sonini kiriting</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" placeholder="Enter full name" name="name" id="name">
                            </div>
                        </div>
                        <div class="tile-footer">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-3">
                                    <button class="btn btn-primary" type="button" id="add"><i class="fa fa-fw fa-lg fa-check-circle"></i>Qo'shish</button>&nbsp;&nbsp;&nbsp;
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Amallar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $sql = mysqli_query($link,"SELECT * FROM `jurnal_soni`");
                                        while ($row = mysqli_fetch_assoc($sql)) {
                                    ?>
                                    <tr id="id<?=$row['id']?>">
                                        <td>
                                            <?=$row['id']?>
                                        </td>
                                        <td>
                                            <?=$row['name']?>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm del" type="button" data-row-id="<?=$row['id']?>">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit"></i></button>
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    <form method="POST" action="count_edit.php" id="formu">
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Name</label>
                                                            <input class="form-control" id="exampleInputPassword1" type="text" name="name" value="<?=$row['name']?>">
                                                            <input type="text" name="id" value="<?=$row['id']?>" hidden>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" id="update" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </form>
                                                  </div>
                                                  
                                                </div>
                                              </div>
                                            </div>
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
    <script type="text/javascript">
    $("#add").click(function() {
        if ($("#name").val().length == 0) {
            Swal.fire(
                'Inputni to\'ldirmadingiz .',
                'Qaytadan urinib ko\'ring',
                'error'
            );

        }else{
            $.ajax({
                url:"count_add.php",
                method:"POST",
                data:"name="+$("#name").val(),
                success:function(e){
                    if(e == 1){
                        $("#name").val("");
                        Swal.fire(
                            'Good jobs',
                            'Saqlandi',
                            'success'
                        );

                    }else{
                        Swal.fire(
                            'OOPS:)',
                            'Xatolik',
                            'error'
                        );
                    }
                }
            })
            return false;
        }
    })

    $(".del").each(function() {
        this.addEventListener("click", function() {
            const rowId = this.dataset.rowId
            $.ajax({
                url: "../api/delete.php",
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
                            'OOPS:)',
                            'O\'chirilmadi',
                            'error'
                        );
                    }
                }
            });
            return false;
        });
    });

    //count_edit.php
    $("#update").click(function(){
        var a = $("#formu").serializeArray();
        $.ajax({
            url:"count_edit.php",
            method:"POST",
            data:a,
            success:function(e){
                if (e == 1) {
                    location.reload();
                } else {
                    Swal.fire(
                            'OOPS:)',
                            'Tahrirlanmadi, qaytadan urining',
                            'error'
                    );
                }
            }
        });
    });
    </script>
</body>

</html>