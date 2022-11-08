<?
  include_once 'lang.php';
?>
<!DOCTYPE html>
<html lang="en">

<? include_once 'head.php'; ?>

<body>
    <!-- HEADER-->
    <header>
        <? include_once 'top_footer.php'; ?>
        <? include_once 'menu.php'; ?>
    </header>
    
    <!-- WRAPPER-->
    <div id="wrapper-content">
        <? include_once 'page_wrapper.php'; ?>
        <? include_once 'top_courses.php'; ?>
        <? include_once 'bottom_wrapper.php'; ?>
    </div>

    <? include_once 'top.php'; ?>
    <? include_once 'bottom_footer.php'; ?>

    <? include_once 'loading.php'; ?>


    <? include_once 'js.php'; ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
    $(function () {
      $("#submit").click(function () {
        var name = $("#name").val();
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
                  'Xabar sending error',
                  'error'
                );
          },

          success: function (rezultat) {
            if(rezultat == 0){
                Swal.fire(
                  'Good job!',
                  'A message has been sent',
                  'success'
                );
                $("#con")[0].reset();
            }
            else{
                Swal.fire(
                  'OOPS :)',
                  'Error sending message',
                  'error'
                );
            }
          },
        });
        return false;
      });
    });
</script>
</body>
</html>