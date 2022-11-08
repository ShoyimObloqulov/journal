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
                <h1><i class="fa fa-user"></i> Azolar</h1>
                <p>SamDCHTI «Ilmiy axborotnoma» jurnali tahririyat kengashi va tahririyat hay’ati tarkibi:</p>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">home</li>
                <li class="breadcrumb-item active"><a href="#">Azolar</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="team_add.php" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Qo'shish</a><br>
                <div class="tile">
                    <div class="tile-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>FIO</th>
                                        <th>Lavozim</th>
                                        <th>Rasm</th>
                                        <th>Haqida</th>
                                        <th>Ish joyi</th>
                                        <th>Amallar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?
                      $team = mysqli_query($link,"SELECT * FROM `team`");
                      $id = 0;
                      while ($row = mysqli_fetch_assoc($team)) {
                      $id ++;
                    ?>
                                    <tr>
                                        <td>
                                            <?=$id?>
                                        </td>
                                        <td>
                                            <?=$row['name']?>
                                        </td>
                                        <td>
                                            <?=$row['lavozim']?>
                                        </td>
                                        <td><img width="100" src="<?=$row['rasm']?>" alt=""></td>
                                        <td>
                                            <?=$row['qushimcha']?>
                                        </td>
                                        <td>
                                            <?=$row['ish_joyi']?>
                                        </td>
                                        <td>
                                            <a class="btn btn-danger" href="team_delete.php?id='<?=$row['id']?>'"><i class="fa fa-trash"></i> Delete</a>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Tahrirlash</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="" method="POST" enctype="multipart/form-data">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">FIO</label>
                                                                    <input class="form-control" id="exampleInputEmail1" type="text" name="name" value="<?=$row['name'];?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Lavozim</label>
                                                                    <input class="form-control" id="exampleInputEmail1" type="text" name="lavozim" value="<?=$row['lavozim']?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Ish joyi</label>
                                                                    <input class="form-control" id="exampleInputEmail1" type="text" name="ish_joyi" value="<?=$row['ish_joyi']?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleTextarea">Azo haqida</label>
                                                                    <textarea class="form-control" id="exampleTextarea" name="qushimcha" rows="3"><?=$row['qushimcha']?></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputFile">Rasm yuklash</label>
                                                                    <input class="form-control-file" id="file" type="file" name="file" aria-describedby="fileHelp">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">facebook link</label>
                                                                    <input class="form-control" id="exampleInputEmail1" type="text" name="face_link" value="<?=$row['face_link']?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">web link</label>
                                                                    <input class="form-control" id="exampleInputEmail1" type="text" name="web_link" value="<?=$row['web_link']?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Twitter link</label>
                                                                    <input class="form-control" id="exampleInputEmail1" type="text" name="twitter_link" value="<?=$row['twitter_link']?>">
                                                                </div>
                                                            </form>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary save">Save changes</button>
                                                            </div>
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
    <script></script>
</body>

</html>