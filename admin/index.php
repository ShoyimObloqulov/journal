<?
  session_start();
  include_once '../config.php';
  include_once 'session.php';
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
          <h1><i class="fa fa-home"></i> Bosh sahifa</h1>
          <p>Tadqiqotchilarning maqolalarni onlayn yuborish tizimi</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="index.php">Bosh sahifa</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="primary coloured-icon"><br>
            <div class="info">
              <h4>
                <button class="btn btn-primary" onclick="window.location.href='maqola.php'" type="button"><i class="fa fa-edit"></i> Maqolalarni ko'rish yuborish</button>
              </h4>
            </div>
          </div>
        </div>
        
      </div>
      
    </main>

    <!-- JS -->
    <? include_once 'js.php' ?>
  </body>
</html>