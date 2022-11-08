<? 
    include 'lang.php';
    include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?=$arr['archives']?></title>
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
                                <h2 class="captions"><?=$arr['archives']?></h2>
                                <ol class="breadcrumb">
                                    <li><a href="index.php"><?=$arr['home']?></a></li>
                                    <li class="active"><a href="#"><?=$arr['archives']?></a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="section section-padding courses">
                        <div class="container">
                            <div class="group-title-index">
                                <h2 class="center-title"><?=$arr['archives_title']?></h2>
                            </div>
                            <div class="courses-wrapper">
                                <!-- Nav tabs-->
                                <div class="tab-content courses-content">
                                    <div id="campus" role="tabpanel" class="">
                                        <?

                                        $limit = 5;
                                        if (isset($_GET["page"])) {
                                            $pn = $_GET["page"];
                                        } else {
                                            $pn = 1;
                                        };

                                        $start_from = ($pn - 1) * $limit;

                                        $sql = "SELECT * FROM `maqola` LIMIT $start_from, $limit";
                                        $rs_result = mysqli_query($link, $sql);
                                        while ($row = mysqli_fetch_array($rs_result, MYSQLI_ASSOC)) {
                                            ?>
                                            <div class="style-show row">
                                                <div class="col-md-12 col-sm-12" id="ramka">
                                                    <div class="">
                                                        <div class="">
                                                            <div class="">
                                                                <a href="<?=$row["file_name"]?>" class="title"><?=$row['mavzu']?></a>
                                                                <div class="info">
                                                                    <div class="author item">Jurnal soni:
                                                                        <?php
                                                                        $id = $row['jurnal_soni'];
                                                                        $sqljurnal = mysqli_query($link,"SELECT * FROM `jurnal_soni` WHERE id='$id'");
                                                                        $rowjournal = mysqli_fetch_assoc($sqljurnal);
                                                                        echo $rowjournal['name'];
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                                <div class="description">
                                                                    <h4 class="center-title">Mualliflar: <?=$row['mualliflar']?></h4>
                                                                </div>
                                                            </div>
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
                                                $sql = "SELECT COUNT(*) FROM `maqola`";
                                                $rs_result = mysqli_query($link,$sql);
                                                $row = mysqli_fetch_row($rs_result);
                                                $total_records = $row[0];
                                                $total_pages = ceil($total_records / $limit);
                                                if (isset($_GET['page'])){
                                                    $i = $_GET['page'] - 1;
                                                }else{
                                                    $i = 1;
                                                }
                                                if ($i != 0){
                                                    $pagLink = "<li><a class='pagination__page btn-squae' href='archives.php?page=".$i."'><i class='fa fa-chevron-left'></i></a></li>";
                                                }else{
                                                    $pagLink = "<li><span class='pagination__page btn-squae' href='archives.php?page=".$i."'><i class='fa fa-chevron-left'></i></span></li>";
                                                }
                                                for ($i=1; $i<=$total_pages; $i++) {
                                                    if ($i==$pn) {
                                                        $pagLink .= "<li><span class='pagination__page btn-squae active'>".$i."</span></li>";
                                                    }
                                                    else  {
                                                        $pagLink .= "<li><a class='pagination__page btn-squae' href='archives.php?page=".$i."'>
                                                                                                ".$i."</a></li>";
                                                    }
                                                };
                                                if (isset($_GET['page'])){
                                                    $i = $_GET['page'] + 1;
                                                }else{
                                                    $i = $total_pages;
                                                }
                                                if ($i <= $total_pages){
                                                    echo $pagLink."<li><a class='pagination__page btn-squae' href='archives.php?page=".$i."'><i class='fa fa-chevron-right'></i></a></li>";
                                                }else{
                                                    echo $pagLink."<li><span class='pagination__page btn-squae' href='archives.php?page=".$i."'><i class='fa fa-chevron-right'></i></span></li>";
                                                }

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
    </div>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
    </div>
    <? include_once 'bottom_footer.php'; ?>
    <? include_once 'loading.php'; ?>
    <? include_once 'js.php'; ?>
</body>

</html>