<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Tables</li>
  </ol>
  <div class="row">
    <div class="col-md-4">

      <div class="card-header">
        <i class="fa fa-plus"></i> Agregar Proveedor</div>
        <div class="card-body">

          <div class="panel panel-default">

            <div class="panel-body">
              <form method="post" action="categorie.php">
                <div class="form-group">
                  <input type="text" class="form-control" name="proveedor-name" placeholder="Nombre del proveedor" required>
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
                <button type="submit" name="add_cat" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar </button>
              </form>
            </div>
          </div>
        </div>
      </div>




      <div class="col-md-8">
        <!-- Example DataTables Card-->
        <div class="card mb-7">
          <div class="card-header">
            <i class="fa fa-table"></i> Lista de Proveedores</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nombre </th>
                      <th>Pais</th>
                      <th>Ciudad</th>
                      <th>Fecha</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <!-- <tfoot>
                  <tr>
                  <th>Nombre del proveedor</th>
                  <th>Pais</th>
                  <th>Ciudad</th>
                  <th>Fecha de inicio</th>
                </tr>
              </tfoot> -->
              <tbody>
                <?php

                $query="SELECT * FROM tbl_proveedor";
                $results = $dbcon->prepare($query);
                $results->execute();

                while($row = $results->fetch(PDO::FETCH_ASSOC))
                {?>
                  <tr>
                    <td > <?php echo $row['nombre']; ?>  </td>
                    <td> <?php echo $row['pais']; ?> </td>
                    <td> <?php echo $row['ciudad']; ?> </td>
                    <td> <?php echo $row['fecha_inclucion']; ?> </td>
                     <?php echo
                     "<td> <a href='update_proveedorVista.php?id=".$row['id_proveedor']."' >
                     <button type='button' class='editar btn btn-primary'>
                     <i class='fa fa-pencil-square-o'></i>
                      </button></a>";?>
                      <?php
                      echo
                      "<a href='delete_proveedor.php?id=".$row['id_proveedor']."' >
                      <button type='button' class='editar btn btn-danger'>
                      <i class='fa fa-trash'></i>
                       </button></a>
                       </td>
                       ";

                       ?>


                  </tr>
                  <!-- <script>
                    obtener_data_editar("#dataTable", table);
                  </script> -->
                <?php } ?>

              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
  </div>
</div>
<!-- <script>
  var obtener_data_editar = function(tbody, table) {
    $(tbody).on("click", "button.editar",function (
      var data=table.row($(this).parents("tr")).data();
      console.log( data );
    ) {

    })
  }
</script> -->
