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
          <h1><i class="fa fa-file-code-o"></i> Maqola yuborish</h1>
          <p>Eslatma : * - to'ldirilishi lozim maydonlar. Maydonlarni kiritishda eslatmalarga e'tibor bering.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="index.php">Maqola qo'shish</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="row">
              <div class="col-lg-12">
                <form action="fcreate_add.php" method="POST" id="form" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="exampleSelect1">Jurnalning qaysi soniga maqola yubormoqchisiz *</label>
                    <select class="form-control" name="jurnal_soni" id="jurnal_soni">
                      <?
                        $sql = mysqli_query($link,"SELECT * FROM `jurnal_soni`");
                        while ($row = mysqli_fetch_assoc($sql)) {
                      ?>
                      <option><?=$row['name'];?></option>
                      <?}?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Maqola mavzusi *</label>
                    <input class="form-control" name="mavzu" id="mavzu" type="text">
                  </div>

                  <div class="form-group">
                    <label for="exampleTextarea">Annotatsiya *</label>
                    <textarea id="ano" class="form-control about">
                    </textarea>
                  </div>
                  
                  <script src="../ckeditor/ckeditor.js"></script>
    
                  <script>
                      CKEDITOR.replace( 'ano' );
                  </script>
                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Mualliflar *</label>
                    <input class="form-control" name="mualliflar" id="mualliflar" type="text">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Maqolangizni yuklang *</label>
                    <input class="form-control-file" name="fileinsert" id="fileinsert" type="file" aria-describedby="fileHelp" accept=".docx, .doc,.pdf">
                  </div>
                  <button class="btn btn-primary" name="submit" id="button" type="button">Yuborish</button>
                </form>
                

              </div>
              
            </div>
            
          </div>
        </div>
      </div>
    </main>
    <!-- JS -->
    
    <? include_once 'js.php' ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
      $(document).ready(function () {
        var data = new FormData();
        $("#button").click(function(){
          var editorText = CKEDITOR.instances.ano.getData();
          //Form data
          var form_data = $('#form').serializeArray();
          $.each(form_data, function (key, input) {
              data.append(input.name, input.value);
          });
          data.append("about",editorText);
          //File data
          var file_data = $('input[name="fileinsert"]')[0].files;
          for (var i = 0; i < file_data.length; i++) {
              data.append("fileinsert[]", file_data[i]);
          }
          if(form_data[2].value=''){
            swal("Xatolik ", "Annotatsiya mavjud emas", "error");
          }
          else{
            if (file_data.length == 0) {
              swal("Xatolik ", "File yuklanmagan", "error");
            }
            else{
              data.append('key', 'value');
              $.ajax({
                  url: "fcreate_add.php",
                  method: "post",
                  data: data,
                  processData: false,
                  contentType: false,
                  dataType:"json",
                  success: function (data) {
                      if (data.success === true) {
                        swal({
                          title: "Ajoyib!",
                          text: "Sizning maqolangiz yuklandi",
                          icon: "success",

                        });
                        window.location.href='fcrud.php';
                      }else{
                        swal({
                          title:"Xatolik ", 
                          text: "Maqola jonatishda hatolik bor", 
                          icon: "error",
                        });
                      }
                  },
              });
            }
          }
          return false;
        });
      });
    </script>

  </body>
</html>