<? 
    include 'lang.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?=$arr['privacy']?></title>
    <? include_once 'head.php'; ?>
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
                                <h2 class="captions"><?=$arr['privacy']?></h2>
                                <ol class="breadcrumb">
                                    <li><a href="index.php"><?=$arr['home']?></a></li>
                                    <li class="active"><a href="#"><?=$arr['privacy_title']?></a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="section section-padding latest-news">
                        <div class="container">
                            <div class="group-title-index">
                                <h2 class="center-title"><?=$arr['privacy']?></h2>
                                <div class="bottom-title"><i class="bottom-icon icon-a-01-01"></i></div>
                            </div>
                            <div class="latest-news-wrapper">
                                <div class="course-des">
                                    <?
                                        $sql = mysqli_query($link,"SELECT * FROM `privacy`");
                                        while ($row = mysqli_fetch_assoc($sql)) {
                                            if($arr['lang'] == "eng"){
                                                echo $row['matn_eng'];
                                            }
                                            else if($arr['lang'] == "uz"){
                                                echo $row['matn_uz'];
                                            }
                                            else{
                                                echo $row['matn_ru'];
                                            }
                                        }
                                    ?>
                                </div>
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
</body>

</html>