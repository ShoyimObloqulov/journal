<?php
    error_reporting(0);
    include_once 'lang.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?=$arr['search']?></title>
    <? include_once 'head.php'; ?>
    <style>
        .bg-w-form{
            padding-top: 0;
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
                                <h2 class="captions"><?=$arr['search_title']?></h2>
                                <ol class="breadcrumb">
                                    <li><a href="index.php"><?=$arr['home']?></a></li>
                                    <li class="active"><a href="#"><?=$arr['search']?></a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="section section-padding courses">
                        <div class="container">
                            <div class="group-title-index">
                                <h2><?=$arr['search_title_1']?></h2>
                            </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label"><?=$arr['maqola_nom']?> <span class="highlight">*</span></label>
                                            <input type="text" placeholder="" class="form-control form-input" name="name" id="name"/><!--label.control-label.form-label.warning-label(for="") Warning for the above !--></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label form-label"><?=$arr['maqola_yil']?></label>
                                            <select class="form-control form-input selectbox" id="yil" name="yil">
                                                <?php
                                                    require_once('config.php');
                                                    $yil = mysqli_query($link,"SELECT * FROM `yili`");
                                                    while ($yil_row = mysqli_fetch_assoc($yil)) {
                                                ?>
                                                <option value="<?=$yil_row['id']?>"><?=$yil_row['name']?></option>
                                                <?}?>
                                            </select><!--label.control-label.form-label.warning-label(for="", hidden)-->
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="contact-submit">
                                    <button type="button" class="btn btn-contact btn-green" id="submit"><span>Send</span></button>
                                </div>
                            <div class="section contentm"></div>
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

    <script>
        $("#submit").click(function(){
            var name = $("#name").val();
            var yil = $("#yil").val();
            var a = "name=" + name + "&yil="+yil;
            if (name.length == 0) {
                Swal.fire(
                  'OOPS :)',
                  'Input to\'ldirilmadi',
                  'error'
                );
            }
            else{
                $.ajax({
                    url:"api/search.php",
                    method:"POST",
                    data:a,
                    success:function(x){
                        if (x.length == 0) {
                            var t = "<p> Malumot topilmadi !<p>"
                            $(".contentm").html(t); 
                        }else{
                            $(".contentm").html(x); 
                        }
                    }
                });
                return false;
            }
        });
    </script>
</body>
</html>