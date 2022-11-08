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
            <div>
                <h1><i class="fa fa-edit"></i> Sayt qo'shish <button class="btn btn-info" onclick="window.location.href='sayt.php'">Ro'yhat</button></h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#"> Sayt</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <div class="tile-title-w-btn">
                        <h3 class="title">Qo'shish</h3>
                    </div>
                    <div class="tile-body">
                        <p>Qo'shmoqchi bolgan saytingiz manzilini kiriting va yuklang</p>
                        <h4>Ustiga bosing</h4>
                        <form class="form-horizontal" id="FormData" method="POST" enctype="multipart/form-data" action="file-upload.php">
                            <input class="form-control" type="file" name="file" id="file" accept=".png,.jpg">
                            <div class="tile-footer">
                                <button class="btn btn-primary" type="submit" name="submit" id="button">Qo'shish</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- JS -->
    <? include_once 'js.php' ?>
</body>

</html>