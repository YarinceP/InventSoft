<div class="row">
  <div class="col-12">
    <div class="col-6">

      <form class="form-horizontal" action="vistas/proveedores/guardarprov.php" method="POST">
        <div class="form-group">
          <label class="control-label col-sm-4" for="email">Proveedor:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="nombre" placeholder="Ingrese el proveedor" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Pais:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pwd" name="pais" placeholder="Ingrese Pais del Proveedor">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Cuidad:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="pwd" name="ciudad" placeholder="Ingrese La ciudad Proveedor">
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary ">Agregar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
