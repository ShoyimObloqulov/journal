<? 
    include 'lang.php';
    include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?=$arr['current']?></title>
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
                                <h2 class="captions"><?=$arr['current']?></h2>
                                <ol class="breadcrumb">
                                    <li><a href="index.php"><?=$arr['home']?></a></li>
                                    <li class="active"><a href="#"><?=$arr['current']?></a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <?php
                        $cout = mysqli_query($link,"SELECT * FROM `maqola`");
                        $sana = mysqli_fetch_assoc($cout);
                        if(mysqli_num_rows($cout) < 1){
                            echo '<h2 class="captions text-center">Maqola mavjud emas</h2>';
                        } 
                        else{
                            ?>
                                <div class="section section-padding courses">
                                    <div class="container">
                                        <div class="group-title-index">
                                            <h2 class="center-title"><?=$arr['current_title']?></h2>
                                            <p class="text-center"><?=$arr['current_title_1']?></p>
                                            <?php
                                                $sql = mysqli_query($link,"SELECT * FROM `maqola` ORDER BY id DESC LIMIT 1");
                                                $vaqt = mysqli_fetch_assoc($sql);
                                            ?>
                                            <p><i class="fa fa-"></i> <?=$arr['PUBLISHED']?>: <?=$vaqt['vaqt']?></p>
                                        </div>
                                        <div class="courses-wrapper">
                                            <!-- Nav tabs-->
                                            <div class="tab-content courses-content">
                                                <div id="campus" role="tabpanel" class="">
                                                    <?
                                                        $sql = "SELECT * FROM `maqola` ORDER BY id DESC LIMIT 5";
                                                        $rs_result = mysqli_query($link, $sql);
                                                        while ($row = mysqli_fetch_array($rs_result, MYSQLI_ASSOC)) {
                                                    ?>
                                                    <div class="style-show row">
                                                        <div class="col-md-12 col-sm-12" id="ramka">
                                                            <div class="">
                                                                <div class="">
                                                                    <div class="">
                                                                        <a href="pdfnpm/print.php?name=<?=$row["file_name"]?>" class="title"><?=$row['mavzu']?></a>
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
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?
                        }
                    ?>
                    
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