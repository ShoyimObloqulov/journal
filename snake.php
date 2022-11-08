<? include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edugate | elonlar</title>
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
                                <h2 class="captions">E`lonlar</h2>
                                <ol class="breadcrumb">
                                    <li><a href="index-2.html">Bosh sahifa</a></li>
                                    <li class="active"><a href="#">elonlar</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="section section-padding news-page">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="news-page-wrapper">
                                        <?

                                            $limit = 2;  
                                            if (isset($_GET["page"])) { 
                                              $pn  = $_GET["page"]; 
                                            } 
                                            else { 
                                              $pn=1; 
                                            };  
                                          
                                            $start_from = ($pn-1) * $limit;  
                                          
                                            $sql = "SELECT * FROM elonlar LIMIT $start_from, $limit";  
                                            $rs_result = mysqli_query($link, $sql);
                                        ?>
                                        <?
                                            while ($row = mysqli_fetch_assoc($rs_result)){
                                        ?>
                                        <div class="edugate-layout-1">
                                            <div class="edugate-image">
                                                <img src="assets/images/news/<?=$row['rasm']?>" alt=""
                                                    class="img-responsive" />
                                            </div>
                                            <div class="edugate-content"><a href="news-detail.html"
                                                    class="title"><?=$row['name'];?></a>

                                                <div class="info">
                                                    
                                                    <div class="date-time item"><a href="#"><?=$row['sana']?></a></div>
                                                </div>
                                                <div class="info-more">
                                                    <div class="view item"><i class="fa fa-user"></i>

                                                        <p> <?=$row['item']?></p>
                                                    </div>
                                                </div>
                                                <div class="description"><?=$row['description']?></div>
                                                <button class="btn btn-green" onclick="win(<?=$row['id'];?>)"><span>Batafsil</span></button>
                                            </div>
                                        </div>
                                        <?}?>
                                        
                                    </div>
                                    <div class="row">
                                        <nav class="pagination col-md-12">
                                            <ul class="pagination__list">
                                                <?
                                                    $sql = "SELECT COUNT(*) FROM elonlar";  
                                                    $rs_result = mysqli_query($link,$sql);  
                                                    $row = mysqli_fetch_row($rs_result);  
                                                    $total_records = $row[0];  
                                                    $total_pages = ceil($total_records / $limit);  
                                                    $pagLink = "";                        
                                                    for ($i=1; $i<=$total_pages; $i++) {
                                                        if ($i==$pn) {
                                                            $pagLink .= "<li><span class='pagination__page btn-squae active'  href='snake.php?page=".$i."'>".$i."</span></li>";
                                                        }            
                                                        else  {
                                                              $pagLink .= "<li><a class='pagination__page btn-squae' href='snake.php?page=".$i."'>
                                                                                                ".$i."</a></li>";  
                                                        }
                                                    };  
                                                    echo $pagLink;  
                                                ?>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-md-3 sidebar layout-right">
                                    <div class="row">
                                        <div class="recent-post-widget widget col-sm-6 col-md-12 col-xs-6 sd380">
                                            <div class="title-widget">Boshqa</div>
                                            <div class="content-widget">
                                                <?
                                                    $media = mysqli_query($link,"SELECT * FROM elonlar ORDER BY id DESC LIMIT 4");
                                                    while($rows = mysqli_fetch_assoc($media)){
                                                ?>
                                                <div class="media">
                                                    <div class="media-left"><a href="courses-detail.html"
                                                            class="link"><img
                                                                src="assets/images/news/<?=$rows['rasm']?>" alt=""
                                                                class="media-image" /></a></div>
                                                    <div class="media-right">
                                                        <div class="info">
                                                            <div class="date-created item"><a href="#"><span><?=$rows['sana']?></span></a></div>
                                                        </div>
                                                        <a href="courses-detail.html" class="link comment"><i
                                                                class="fa fa-comment"></i><span><?=$rows['item']?></span></a><a
                                                            href="courses-detail.php?id=<?=$rows['id'];?>" class="link title"><?=substr($rows['description'],0,50);?>...</a>
                                                    </div>
                                                </div>
                                                <?}?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BUTTON BACK TO TOP-->
        <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
    </div>


    <script type="text/javascript">
        function win(id){
            window.location.href='courses-detail.php?id='+id;
        }
    </script>
    <!-- FOOTER-->
    <? include_once 'bottom_footer.php'; ?>
    <!-- LOADING-->
    <? include_once 'loading.php'; ?>
    
    <? include_once 'js.php'; ?>
</body>
</html>