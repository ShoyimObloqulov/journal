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
                <h1><i class="fa fa-th-list"></i> Maqola joylash <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><i class="fa fa-book"></i> Maqola qo'shish</button></h1>
                <p>Admin tomonidan maqolani joylash</p>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Yangi maqola joylash</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="all_update.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Maqola mavzusi:</label>
                                    <input type="text" class="form-control" name="mavzu" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelect1">Jurnal soni: </label>
                                    <select class="form-control" name="jurnal_soni" required>
                                        <?php
                                          $sql = mysqli_query($link,"SELECT * FROM `jurnal_soni`");
                                          while ($row = mysqli_fetch_assoc($sql)) {
                                        ?>
                                        <option value="<?=$row['id']?>">
                                            <?=$row['name']?>
                                        </option>
                                        <?}?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Muallif:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="mualliflar" required>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Maqola haqida:</label>
                                    <textarea class="form-control" id="message-text" name="decs" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Maqola file</label>
                                    <input name="file" accept=".docx, .doc" type="file">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Send message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">home</li>
                <li class="breadcrumb-item active"><a href="#">Insert</a></li>
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
                                        <th>Mavzu</th>
                                        <th>Mualliflar</th>
                                        <th>Vaqt</th>
                                        <th>Ammallar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                      $sql = mysqli_query($link,"SELECT * FROM `maqola`");
                                      while ($row = mysqli_fetch_assoc($sql)) {
                                    ?>
                                    <tr id="id<?=$row['id']?>">
                                        <td>
                                            <?=$row['mavzu']?>
                                        </td>
                                        <td>
                                            <?=$row['mualliflar']?>
                                        </td>
                                        <td>
                                            <?=$row['vaqt']?>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger delete" data-row-id="<?=$row['id']?>"><i class="fa fa-trash"></i></button>
                                            <button class="btn btn-primary" onclick="window.location.href='../<?=$row['file_name']?>'"><i class="fa fa-download"></i></button>
                                            <button class="btn btn-success mark" data-row-id="<?=$row['id']?>"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-info" onclick="window.location.href='all_u.php?id=<?=$row['id']?>'"><i class="fa fa-edit"></i></button>
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
      $(".mark").each(function() {
          this.addEventListener("click", function() {
              const rowId = this.dataset.rowId
              console.log(rowId);
              $.ajax({
                  url: "maqola_chop.php",
                  method: "POST",
                  data: "id=" + rowId,
                  success: function(x) {
                      if (x == 1) {
                          Swal.fire(
                              'Good jobs!',
                              'Saytda chop qilindi',
                              'success'
                          );
                      }
                  }
              });
              return false;
          });
      });
    });
    $(".delete").each(function() {
        this.addEventListener("click", function() {
            const rowId = this.dataset.rowId
            console.log(rowId);
            $.ajax({
                url: "maqola_delete.php",
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