<? 
    include_once 'lang.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Topic</title>
    <? include_once 'head.php'; ?>
    <link rel="stylesheet" href="topic/css/style.css">

    <style>
        .dow{
            color: #111;
            background-color: #14F4BA;
            padding: 4px;
        }
    </style>
</head>

<body>
    <!-- HEADER-->
    <header>
        <? include_once 'top_footer.php'; ?>
        <? include_once 'menu.php'; ?>
    </header>
    <!-- WRAPPER-->
    <div id="wrapper-content">
        <!-- PAGE WRAPPER-->
        <div id="page-wrapper">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <!-- CONTENT-->
                <div class="content">
                    <div class="section background-opacity page-title set-height-top">
                        <div class="container">
                            <div class="page-title-wrapper">
                                <!--.page-title-content-->
                                <h2 class="captions">VIEW ALL AVAILABLE COLLECTIONS</h2>
                                <ol class="breadcrumb">
                                    <li><a href="index.php">
                                            <?=$arr['home']?></a></li>
                                    <li class="active"><a href="#">Topic</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="section section-padding">
                        <div class="">
                            <h1>Collection of articles</h1>
                            <div class="accordion">
                                <?
                                    $j = mysqli_query($link,"SELECT * FROM `jurnal_soni`");
                                    while ($jr = mysqli_fetch_assoc($j)) {
                                ?>
                                <div class="accordion-item">
                                    <div class="accordion-item-header">
                                        <p>Journal name:
                                            <?=$jr['name']?>
                                        </p>
                                    </div>
                                    <div class="accordion-item-body">
                                        <?
                                            $id = $jr['id'];
                                            $t = mysqli_query($link,"SELECT * FROM `topic` WHERE jurnal_id='$id'");
                                            $tr = mysqli_fetch_assoc($t);
                                        ?>
                                        <?
                                            if (mysqli_num_rows($t) > 0) {
                                                ?>
                                                    <div class="accordion-item-body-content">
                                                        <?=$tr['name']?>
                                                        <a href="topic/file/<?=$tr['file']?>" class="nav-link" download="true">
                                                            <button class="btn btn-info dow">Yuklash</button>
                                                        </a>
                                                    </div>
                                                <?
                                            } else {
                                                ?>
                                                    <div class="accordion-item-body-content">
                                                        Hali jurnal yuklanmagan
                                                    </div>
                                                <?
                                            }
                                            
                                        ?>
                                    </div>
                                </div>
                                <?}?>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <? include_once 'logo.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
    </div>
    <? include_once 'bottom_footer.php'; ?>
    <? include_once 'loading.php'; ?>
    <? include_once 'js.php'; ?>
    <script type="text/javascript" src="topic/js/main.js"></script>
</body>

</html>