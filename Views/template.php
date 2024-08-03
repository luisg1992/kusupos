<?php

  session_start();
  date_default_timezone_set('America/Lima');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KUSUNOKI SF</title>
  <link rel="icon" href="Assets/img/default/KUSU_LOGO_BLANCO_MINI.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="Assets/css/fonts.googleapis.css">
  <!-- Font Awesome -->
  <script src="Assets/js/fontawesome.min.js" crossorigin="anonymous"></script>
  <!-- Sweet Alert 2.11 -->
  <script src="Assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>
  <!-- jQuery -->
  <script src="Assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="Assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="Assets/dist/js/adminlte.min.js"></script>
  <script src="Assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="Assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="Assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="Assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="Assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="Assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="Assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="Assets/plugins/jszip/jszip.min.js"></script>
  <script src="Assets/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="Assets/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="Assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="Assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="Assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- InputMask -->
  <script src="Assets/plugins/moment/moment.min.js"></script>
  <script src="Assets/plugins/inputmask/jquery.inputmask.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="Assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  
  <!-- Theme style -->
  <link rel="stylesheet" href="Assets/dist/css/adminlte.css">
  <!-- japanesse font-->
  <link href="https://fonts.cdnfonts.com/css/kamikaze" rel="stylesheet">
  <link rel="stylesheet" href="Assets/css/template.css">
  <link rel="stylesheet" href="Assets/css/tabs.css">
  
   <!-- Bootstap -->
  <link rel="stylesheet" href="Assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="Assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="Assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  

</head>
<!-- Site wrapper -->
<?php 

    echo '
    <body class="hold-transition sidebar-collapse sidebar-mini">
    <div class="wrapper">'; 
  
    include "Modules/templates/header.php";
    include "Modules/templates/sidebar.php";

    if (isset($_GET["ruta"])) {
      if ($_GET["ruta"] == "ventas" || 
          $_GET["ruta"] == "nuevaVenta") {

        include "Modules/".$_GET["ruta"].".php";
        
      }else{

        include "Modules/templates/404.php";
        
      }
    }else{
      include "Modules/inicio.php";
    }
    
    include "Modules/templates/footer.php";
 
  echo '</div>';

?>
<!-- ./wrapper -->


<script src="Assets/js/template.js"></script>
<script src="Assets/js/usuarios.js"></script>
<script src="Assets/js/categorias.js"></script>
<script src="Assets/js/api.js"></script>
<script src="Assets/js/tabs.js"></script>
<script src="Assets/js/caja.js"></script>
  
</body>
</html>
