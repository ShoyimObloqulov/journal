<? include_once 'config.php'; ?>
<? include_once 'lang.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$arr['contact']?> </title>
    <? include_once 'head.php'; ?>
</head>
<body><!-- HEADER-->
<header>
    <? include_once 'top_footer.php'; ?>
    <? include_once 'menu.php'; ?>
</header>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions"><?=$arr['contact']?></h2>
                            <ol class="breadcrumb">
                                <li><a href="index-2.html"><?=$arr['home']?></a></li>
                                <li class="active"><a href="#"><?=$arr['contact']?></a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                
                <div class="section section-padding contact-main">
                    <div class="container">
                        <div class="contact-main-wrapper">
                            <? include_once 'contact-form.php'; ?>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(function () {
      $("#submit").click(function () {
        // Get  value
        var name = $("#name").val();

        // Get email
        var email = $("#email").val();

        var subject = $("#subject").val();

        var kim = $("#kim").val();

        var content = $("#content").val();
        $.ajax({
          type: "POST",
          url: "contact_us.php",
          data: "name=" + name + "&email=" + email+"&kim="+ kim + "&content=" + content+"&subject="+subject,
          error: function () {
                Swal.fire(
                  'OOPS :)',
                  'Xabar yuborishda xatolik',
                  'error'
                );
          },

          success: function (rezultat) {
            if(rezultat == 0){
                Swal.fire(
                  'Good job!',
                  'Xabar yuborildi',
                  'success'
                );
                $("#con")[0].reset();
            }
            else{
                Swal.fire(
                  'OOPS :)',
                  'Xabar yuborishda xatolik',
                  'error'
                );
            }
          },
        });
        return false;
      });
    });
</script>
<? include_once 'bottom_footer.php'; ?>
<? include_once 'loading.php'; ?>
<? include_once 'js.php'; ?> 
</body>
</html>