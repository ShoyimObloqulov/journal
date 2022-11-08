<? 
    include_once 'lang.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Topic</title>
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
                                <h2 class="captions">Mavjud barcha to'plamlarni ko'rish</h2>
                                <ol class="breadcrumb">
                                    <li><a href="index.php"><?=$arr['home']?></a></li>
                                    <li class="active"><a href="#">Topic</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="section section-padding">
                        <div class="container">
                            
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