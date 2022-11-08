<? include_once 'lang.php'; ?>
<? include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?=$arr['team']?></title>
    <? include_once 'head.php' ?>
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
                                <h2 class="captions"><?=$arr['team']?></h2>
                                <ol class="breadcrumb">
                                    <li><a href="index-2.html"><?=$arr['home']?></a></li>
                                    <li class="active"><a href="#"><?=$arr['team']?></a></li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="section section-padding news-page">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row news-page-wrapper">
                                        <?  
                                            $limit = 3;       
                                            if (isset($_GET["page"])) { 
                                              $pn  = $_GET["page"]; 
                                            } 
                                            else { 
                                              $pn=1; 
                                            };  
                                          
                                            $start_from = ($pn-1) * $limit;  
                                          
                                            $sql = "SELECT * FROM `team` LIMIT $start_from, $limit";  
                                            $rs_result = mysqli_query ($link,$sql); 
                                            while ($row = mysqli_fetch_array($rs_result, MYSQLI_ASSOC)) {
                                        ?>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="edugate-layout-3 news-gird">
                                                <div class="edugate-layout-3-wrapper"><a href="#"
                                                        class="edugate-image"><img src="<?=$row['rasm']?>"
                                                            alt="" class="img-responsive" /></a>

                                                    <div class="edugate-content"><a href="#"
                                                            class="title"><?=$row['name']?> </a>

                                                        <div class="info">
                                                            <div class="author item">Position: <?=$row['lavozim']?></div>
                                                        </div>
                                                        
                                                        <div class="description">
                                                            <p class="bottom-title">Workplace: <?=$row['ish_joyi']?></p>
                                                        </div>
                                                        <button class="btn btn-green"
                                                            onclick="win(<?=$row['id'];?>)"><span>More</span></button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?}?>
                                       
                                    </div>
                                    <div class="row">
                                        <nav class="pagination col-md-12">
                                            <ul class="pagination__list">
                                                <?
                                                    $sql = "SELECT COUNT(*) FROM team";  
                                                    $rs_result = mysqli_query($link,$sql);  
                                                    $row = mysqli_fetch_row($rs_result);  
                                                    $total_records = $row[0];  
                                                    $total_pages = ceil($total_records / $limit);  
                                                    $pagLink = "";                        
                                                    for ($i=1; $i<=$total_pages; $i++) {
                                                        if ($i==$pn) {
                                                            $pagLink .= "<li><span class='pagination__page btn-squae active'  href='team.php?page=".$i."'>".$i."</span></li>";
                                                        }            
                                                        else  {
                                                              $pagLink .= "<li><a class='pagination__page btn-squae' href='team.php?page=".$i."'>
                                                                                                ".$i."</a></li>";  
                                                        }
                                                    };  
                                                    echo $pagLink;  
                                                ?>
                                            </ul>
                                        </nav>
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
    <!-- FOOTER-->
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
    </div>
    <script type="text/javascript">
        function win(id){
            window.location.href = 'team_us.php?id=' + id;
        }
    </script>
    <? include_once 'bottom_footer.php'; ?>

    <? include_once 'loading.php'; ?>
    
    <? include_once 'js.php' ?>
</body>

</html>