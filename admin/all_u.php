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
            <h1><i class="fa fa-home"></i> Bosh sahifa</h1>
            <p>Maqolalarni taxrirlash</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="index.php">Bosh sahifa</a></li>
        </ul>
    </div>
    <div class="row">
        <?php
            $id = $_GET['id'];
            $sql = mysqli_query($link,"SELECT * FROM `maqola` WHERE id='$id'");
            while ($row = mysqli_fetch_assoc($sql)){
        ?>
        <form action="update.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="id" value="<?=$row['id']?>" hidden>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Maqola mavzusi:</label>
                <input type="text" class="form-control" name="mavzu" value="<?=$row['mavzu']?>">
            </div>
            <div class="form-group">
                <label for="exampleSelect1">Jurnal soni: </label>
                <select class="form-control" name="jurnal_soni" required>
                    <?php
                    $sql1 = mysqli_query($link,"SELECT * FROM `jurnal_soni`");
                    while ($row1 = mysqli_fetch_assoc($sql1)) {
                        ?>
                        <option value="<?=$row['id']?>">
                            <?=$row1['name']?>
                        </option>
                    <?}?>
                </select>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Muallif:</label>
                <input type="text" class="form-control" id="recipient-name" name="mualliflar" value="<?=$row['mualliflar']?>">
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">Maqola haqida:</label>
                <textarea class="form-control" id="message-text" name="decs">
                                                          <?=$row['anotatsiya']?>
                                                        </textarea>
            </div>
            <div class="form-group">
                <label>Maqola file</label>
                <input name="file" accept=".docx, .doc" type="file">
                <small>Qaytadan yuklash lozim!.</small>
            </div>
            <button type="submit" id="update" class="btn btn-primary">Send message</button>
        </form>
        <?}?>
    </div>

</main>

<!-- JS -->
<? include_once 'js.php' ?>
</body>
</html>