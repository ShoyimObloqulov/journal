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
                <h1><i class="fa fa-comment"></i> Policies</h1>
                <p>Saytda mavjud Policies us sahifasini toldirish uchun</p>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">home</li>
                <li class="breadcrumb-item active"><a href="#">about</a></li>
            </ul>
        </div>
        <div class="bs-component col">
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#uz">Uz</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#eng">Eng</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#ru">Ru</a></li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <?php
                   $about = mysqli_query($link,"SELECT * FROM `policies` WHERE 1");
                   while($row = mysqli_fetch_assoc($about)){ 
                ?>
                <div class="tab-pane fade active show" id="uz">
                    <div class="">
                        <div class="tile">
                            <h3 class="tile-title">About us</h3>
                            <div class="tile-body">
                                <form class="row" id="dateform1" action="policiesupdate.php" method="POST">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Til</label>
                                            <input class="form-control" type="text" placeholder="Uz" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Text</label>
                                            <textarea class="form-control" rows="4" placeholder="Text" id="txt"
                                                name="txt"><?=$row['matn_uz']?></textarea>
                                            <input type="text" name="lang" hidden value="uz">
                                            <script src="../ckeditor/ckeditor.js"></script>
                                            <script>
                                                CKEDITOR.replace('txt');
                                            </script>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group col-md-4 align-self-end">
                                            <button class="btn btn-primary" id="uzbek" type="submit"><i
                                                    class="fa fa-fw fa-lg fa-check-circle"></i>Saqlash</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="ru">

                    <div class="">
                        <div class="tile">
                            <h3 class="tile-title">About us</h3>
                            <div class="tile-body">
                                <form class="row" id="dateform2" action="policiesupdate.php" method="POST">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Til</label>
                                            <input class="form-control" type="text" placeholder="Ru" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Text</label>
                                            <textarea class="form-control" rows="4" placeholder="Text" id="text2" name="txt"><?=$row['matn_ru']?></textarea>
                                            <input type="text" name="lang" hidden value="ru">
                                            <script src="../ckeditor/ckeditor.js"></script>
                                            <script>
                                                CKEDITOR.replace('text2');
                                            </script>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group col-md-4 align-self-end">
                                            <button class="btn btn-primary" id="russia" type="submit"><i
                                                    class="fa fa-fw fa-lg fa-check-circle"></i>Saqlash</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="eng">
                    <div class="">
                        <div class="tile">
                            <h3 class="tile-title">Policies</h3>
                            <div class="tile-body">
                                <form class="row" id="dateform3" action="policiesupdate.php" method="POST">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Til</label>
                                            <input class="form-control" type="text" placeholder="Eng" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Text</label>
                                            <textarea class="form-control" rows="4" placeholder="Text" id="text1"
                                                name="txt"><?=$row['matn_eng']?></textarea>
                                            <input type="text" name="lang" hidden value="eng">
                                            <script src="../ckeditor/ckeditor.js"></script>
                                            <script>
                                                CKEDITOR.replace('text1');
                                            </script>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group col-md-4 align-self-end">
                                            <button class="btn btn-primary" id="english" type="submit"><i
                                                    class="fa fa-fw fa-lg fa-check-circle"></i>Saqlash</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?}?>
            </div>
        </div>
    </main>


    <!-- JS -->
    <? include_once 'js.php' ?>

</body>

</html>