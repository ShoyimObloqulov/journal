<? 
    require_once 'config.php'; 
    require_once 'lang.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SAM DU| Team US</title>
    <? require_once 'head.php'; ?>
</head>

<body>
    <!-- HEADER-->
    <header>
        <? require_once 'top_footer.php'; ?>
        <? require_once 'menu.php'; ?>
    </header>
    
    <div id="wrapper-content"><!-- PAGE WRAPPER-->
        <div id="page-wrapper"><!-- MAIN CONTENT-->
            <div class="main-content"><!-- CONTENT-->
                <div class="content">
                    <div class="section background-opacity page-title set-height-top">
                        <div class="container">
                            <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">Team US</h2>
                                <ol class="breadcrumb">
                                    <li><a href="index-2.html">Bosh sahifa</a></li>
                                    <li class="active"><a href="#">Team US</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    
                    <div class="section section-padding profile-teacher">
                        <div class="container">
                            <?
                                $id = $_GET['id'];
                                $sql = mysqli_query($link,"SELECT * FROM team WHERE id='$id'");
                                while($row = mysqli_fetch_assoc($sql)){

                            ?>
                            <div class="profile-teacher-wrapper">
                                <div class="teacher-info">
                                    <div class="staff-item2 customize">
                                        <div class="staff-item-wrapper">
                                            <div class="staff-info"><a href="#" class="staff-avatar"><img src="<?=$row['rasm'];?>" alt="" class="img-responsive"/></a><a href="#" class="staff-name"><?=$row['name'];?></a></div>
                                        </div>
                                        <div class="staff-socials">
                                            <a href="<?=$row['face_link'];?>" class="facebook"><i class="fa fa-facebook"></i></a>
                                            <a href="<?=$row['web_link'];?>" class="google"><i class="fa fa-google-plus"></i></a>
                                            <a href="<?=$row['twitter_link'];?>" class="twitter"><i class="fa fa-twitter"></i></a>
                                        </div>
                                    </div>
                                    <div class="teacher-des">
                                        <div class="title m-3"><?=$row['name'];?></div>
                                        <div class="subtitle"><?=$row['lavozim'];?></div>
                                        <div class="content"><p class="content-detail"><?=$row['qushimcha'];?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?}?>
                        </div>
                    </div>
                    <div class="container">
                        <? require_once 'logo.php'; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- BUTTON BACK TO TOP-->
        <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
    </div>
    <? require_once 'bottom_footer.php'; ?>
    <? require_once 'js.php'; ?>
</body>

</html>