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
                <h1><i class="fa fa-th-list"></i>Userlar</h1>
                <p>Userlarni boshqarish oynasi <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Qo'shish</button></p>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">User qo'shish</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="../api/user_add.php" method="POST" id="useradd">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Name</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputState">Rol</label>
                                        <select id="inputState" class="form-control" name="rol">
                                            <option selected>admin</option>
                                            <option>user</option>
                                            <option>expert</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Email address</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Password</label>
                                        <input type="Password" class="form-control" id="formGroupExampleInput2" placeholder="Password" name="password">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" id="save">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Maqola</li>
                <li class="breadcrumb-item active"><a href="#">user</a></li>
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
                                        <th>Rol</th>
                                        <th>Amallar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                      $u = mysqli_query($link,"SELECT * FROM `user`");
                                      while ($row = mysqli_fetch_assoc($u)) {
                                    ?>
                                    <tr id="id<?=$row['id']?>">
                                        <td>
                                            <?=$row['id']?>
                                        </td>
                                        <td>
                                            <?=$row['name']?>
                                        </td>
                                        <td>
                                            <?=$row['rol']?>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger button" type="button" data-row-id="<?=$row['id']?>"><i class="fa fa-trash"></i> Delete</button>
                                            <a class="btn btn-info" href="user_edit.php?id=<?=$row['id']?>"><i class="fa fa-edit"></i> Taxrirlash</a>
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
    $(".button").each(function() {
        this.addEventListener("click", function() {
            const rowId = this.dataset.rowId
            $.ajax({
                url: "user_delete.php",
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
    $("#save").on("click", function() {
        var a = $("#useradd").serializeArray();
        $.ajax({
            url: "../api/user_add.php",
            method: "POST",
            data: a,
            success: function(e) {
                if (e == 1) {
                    Swal.fire(
                        'Good jobs!',
                        'Qo\'shildi',
                        'success'
                    ).then(function() {
                        location.reload();
                    });
                }
            }
        });
    })
    </script>
</body>

</html>