
<?
  session_start();
  include '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>User Admin</title>

    <!-- CSS -->
    <? include_once 'head.php'; ?>
  </head>

  <body class="app sidebar-mini">

    <!-- Navbar-->
    <? include_once 'navbar.php'; ?>


    <!-- Sidebar menu-->
    <? include_once 'sidebar.php'; ?>

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Xabar yo'lash</h1>
          <p>Xabaringiz Adminlarga yo'lanadi</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Bosh sahifa</li>
          <li class="breadcrumb-item"><a href="#">xabar</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6">
          <form action="xabar_c.php" method="POST">
            
            <div class="form-group">
                <label for="exampleTextarea">Xabarni yozing</label>
                <textarea class="form-control" name="xabar" id="exampleTextarea" rows="3"></textarea>
            </div>

            <button class="btn btn-primary" id="button" type="button">Yuborish</button>
          </form>
        </div>
      </div>
    </main>

    <!-- JS -->
    <? include_once 'js.php' ?>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
      $("#button").click(function() {
        var b = "xabar=" + $("#exampleTextarea").val();
        $.ajax({
          method:"POST",
          url:"xabar_c.php",
          data:b,
          success:function(d){
            console.log($("#exampleTextarea"));
            if(d == 1){
              swal({
                  title: "Ajoyib!",
                  text: "Sizning xabaringiz yuklandi",
                  icon: "success",
              });
              
            } else{
              swal({
                  title: "Xatolik!",
                  text: "Xabar yuborishdagi xatolik",
                  icon: "error",
              });
            }
          }
        });
      });
    </script>
  </body>
</html>

<!-- 
 -->