Actualizar<?php  include("../conexion/conexion.php");
$dbcon = Conexion::singleton_conexion();

// Funcion que obtiene todos datos del proveedor sellecionado mediante el ID
$consulta=consulta_proveedor($dbcon,$_GET['id']);

function consulta_proveedor($dbcon,$id_proveedor)
{
  $query="SELECT * FROM tbl_proveedor WHERE id_proveedor='".$id_proveedor."'";
  $results = $dbcon->prepare($query);
  $results->execute();
  $row = $results->fetch(PDO::FETCH_ASSOC);


  return[
    $row['id_proveedor'],
    $row['nombre'],
    $row['pais'],
    $row['ciudad'],
  ];


}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../layouts/htmlheader.php'; ?>

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <?php include '../layouts/menu.php'; ?>
  <div class="content-wrapper">



<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <div class="card-header">
          <i class="fa fa-refresh"></i> Actualizar Proveedor</div>
          <div class="card-body">

            <div class="panel panel-default">

              <div class="panel-body">

                <form method="POST" action="update_proveedor.php">
                  <div class="form-group col-md-6">
                    <input type="hidden"  value="<?php echo $consulta[0]?>" id="id_proveedor" name="id_proveedor">
                    <input value="<?php echo $consulta[1]?>" id="nombre_proveedor" type="text" class="form-control" name="nombre_proveedor" placeholder="Nombre del proveedor..." >
                    <br>
                    <div class="row">

                      <div class="col-md-2">
                        <label for="">Pais:</label>
                      </div>
                      <div class="col-md-6">

                        <select class="form-control selectpicker" data-live-search="true" name="pais">
                          <option value="">Honduras</option>
                          <option value="">Mexico</option>
                        </select>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-2">
                        <label for="">Ciudad:</label>
                      </div>
                      <div class="col-md-6">
                        <select class="form-control selectpicker" data-live-search="true" name="ciudad">
                          <option value="">La Ceiba</option>
                        </select>
                      </div>
                    </div>


                  </div>
                  <button type="submit"  class="btn btn-primary"><i class="fa fa-refresh"></i> Actualizar </button>
                  <?php echo "<a href='proveedor.php' class='btn btn-danger'>Cancelar</a>";?>
                </form>
              </div>
            </div>
          </div>
        </div>
</div>
</div>





    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include '../layouts/footer.php'; ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <?php include '../layouts/htmllogout.php'; ?>
    <?php include '../layouts/scripts.php'; ?>
  </div>
</body>

</html>
