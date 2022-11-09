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
                <h1><i class="fa fa-home"></i> Toplamlar Taxrirlash</h1>
                <p>Tizimga chiquvchi To'plamni taxrirlash</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="nav-link"><i class="fa fa-home fa-lg">Bosh sahifa</i></a></li>
                <li class="breadcrumb-item">Taxrirlash</li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-6 content" style="background: #fff;">
                <?
                    $id = $_GET['id'];
                    $sql = mysqli_query($link,"SELECT * FROM `topic` WHERE id='$id'");
                    while($row = mysqli_fetch_assoc($sql)){
                ?>
                <form action="../api/topic/update.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="id" value="<?=$id?>" hidden>
                    <div class="form-group">
                        <label for="exampleInputEmail1">To'plam nomi</label>
                        <input type="text" class="form-control" placeholder="Nomi..." name="name" value="<?=$row['name']?>">
                    </div>
                    <div class="form-group">
                        <label>Jurnal soni</label>
                        <select class="form-control" name="jurnal_id">
                            <?
                              $sql = mysqli_query($link,"SELECT * FROM `jurnal_soni`");
                              while($wh = mysqli_fetch_assoc($sql)){
                            ?>
                            <option value="<?=$wh['id']?>">
                                <?=$wh['name']?>
                            </option>
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
                <?}?>
            </div>
        </div>
    </main>
    <!-- JS -->
    <? include_once 'js.php' ?>
</body>

</html>