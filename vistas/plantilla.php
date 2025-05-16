<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SAEP</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css">


<!-- ====================================================================================== -->

  <!-- jQuery -->
  <script src="vistas/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- DataTables  & Plugins -->
<script src="vistas/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="vistas/plugins/jszip/jszip.min.js"></script>
<script src="vistas/plugins/pdfmake/pdfmake.min.js"></script>
<script src="vistas/plugins/pdfmake/vfs_fonts.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>

</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    <?php
    echo 'div class "wrapper';
    include "vistas/modulos/cabezote.php";
    include "vistas/modulos/menu.php";

    if (isset($_GET["ruta"])) {
      if (
        $_GET["ruta"] == "inicio" ||
        $_GET["ruta"] == "programas" ||
        $_GET["ruta"] == "sedes" ||
        $_GET["ruta"] == "fichas" ||
        $_GET["ruta"] == "permisos" ||
        $_GET["ruta"] == "roles" ||
        $_GET["ruta"] == "perfil" ||
        $_GET["ruta"] == "modulos" ||
        $_GET["ruta"] == "usuarios" ||
        $_GET["ruta"] == "asignacion" ||
        $_GET["ruta"] == "seguimiento" 


      ) {
        include "vistas/modulos/" . $_GET["ruta"] . ".php";
      } else {
        include "vistas/modulos/error404.php";
      }
    }

    include "vistas/modulos/footer.php";

    ?>



    <!-- Content Wrapper. Contains page content
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Inicio</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Blank Page</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section> -->

      <!-- Main content -->

      <!-- /.content -->
    </div>

    <!-- <?php
    include "modulos/inicio.php";
    ?> -->

    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->
    <!-- <aside class="control-sidebar control-sidebar-dark">-->
    <!-- Control sidebar content goes here -->
    <!-- </aside>  -->
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->


  <!-- AdminLTE for demo purposes -->
  <!--<script src="vistas/dist/js/demo.js"></script>-->


  <script src="vistas/js/plantilla.js"></script>

</body>
</html>