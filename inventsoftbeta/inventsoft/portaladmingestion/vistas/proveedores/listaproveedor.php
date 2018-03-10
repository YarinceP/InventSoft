<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-12">
      <h3 class="page-header">
        <a class="btn btn-primary ajax-request"
        href="/proveedores/nuevoproveedor.php"><!-- ajax-request es una clase identificadora utiliza en la funcion del archivo funciones.js utilizando JQuery-->
        <i class="fa fa-plus"></i>Nuevo Proveedor
      </a>
    </h3>
  </div>
</div>
</div>

<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Listado de Proveedores
          <div class="panel-body">
            <div class="col-md-12">
              <table class="table table-striped table-condensed" id="datos">
                <thead>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Pais</th>
                  <th>Ciudad</th>
                  <th>Fecha de Inclusion</th>
                  <th>Opciones</th>
                </thead>
                <tbody>
                  <?php
                  include ($_SERVER['DOCUMENT_ROOT'].'/inventsoft/conexion/conexion.php');
                  $db=conexion('root','');
                  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                  $stmt=$db->prepare("SELECT * FROM tbl_proveedor");
                  $stmt->execute();

                  $fila= $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_LAST);

                  do {
                    echo "<tr>";
                    echo "<td>".$fila[0]."</td>";
                    echo "<td>".$fila[1]."</td>";
                    echo "<td>".$fila[2]."</td>";
                    echo "<td>".$fila[3]."</td>";
                    echo "<td>".$fila[5]."</td>";
                    echo "<td>";
                    //Opciones CRUD
                    ?>
                    <button class="btn btn-primary" name="button"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger" name="button"><i class="fa fa-trash"></i></button>
                    <?php
                    echo "</td>";

                    echo "</tr>";
                  } while ($fila=$stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_PRIOR))
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
  $('#datos').DataTable({
    responsive: true,
    "language":{
      "lengthMenu":"Mostrar _MENU_ registros por pagina",
      "zeroRecords":"No se encontraron registros que mostrar",
      "info":"Mostrar pagina _PAGE_ de _PAGES_",
      "infoEmpty":"No hay registros disponibles",
      "infoFiltered":"(filtrados de _MAX_ total registros)",
      "search":"Buscar"
    },
    "order":[[ 1, "desc" ]],
    responsive:true
  });
});
</script>
