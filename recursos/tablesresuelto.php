<?php  include("../conexion/conexion.php");
$dbcon = Conexion::singleton_conexion();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'layouts/htmlheader.php'; ?>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <?php include 'layouts/menu.php'; ?>
  <div class="content-wrapper">
    <?php include 'configuracion/proveedores.php'; ?>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include 'layouts/footer.php'; ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <?php include 'layouts/htmllogout.php'; ?>
    <?php include 'layouts/scripts.php'; ?>
  </div>
</body>

</html>
