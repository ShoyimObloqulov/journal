<?
  session_start();
  include_once '../config.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin</title>

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
          <h1><i class="fa fa-edit"></i> User edit</h1>
          <p>Userni tahrirlash</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#"> User</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <div class="row">
              <div class="col-lg-12">
                <form action="expert_c.php" id="form" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="exampleInputEmail1">FIO</label>
                    <input class="form-control" id="exampleInputEmail1" type="text" name="name">
                  </div>
                  <div class="form-group">
                    <label for="number">Telifon nomeri</label>
                    <input class="form-control" id="phone" placeholder="+998 (__) ___ __ __" type="text" name="nomer">
                  </div>
                  <script src="https://unpkg.com/imask"></script>
                  <script type="text/javascript">
                    var phoneMask = IMask(
                      document.getElementById('phone'), {
                        mask: '+{998}(00)000-00-00'
                      });
                  </script>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Yo'nalish</label>
                    <input class="form-control" id="yunalish" type="text" name="yunalish" >
                  </div>
                  <div class="tile-footer">
                    <button class="btn btn-primary" type="button" id="button" name="button">Saqlash</button>
                  </div>
                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </main>

    <!-- JS -->
    <? include_once 'js.php' ?>

    <script>
      $("#button").click(function(){
        var d = $("form").serializeArray();
        $.ajax({
          url:"expert_c.php",
          method:"POST",
          data:d,
          success:function(x){
            if(x == 1){
              swal("Qoshildi!", "Muofaqiyatli amalga oshirildi.", "success");
              $("#form")[0].reset();
            }else{
              swal("Xatolik!", ":}.", "error");
            }
          }
        });
      });
    </script>
  </body>
</html>