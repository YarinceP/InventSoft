<?php

include("../conexion/conexion.php");
$dbcon = Conexion::singleton_conexion();
date_default_timezone_set('America/Tegucigalpa');


$nombre=$_POST['nombre_proveedor'];
$id_proveedor=$_POST['id_proveedor'];
$tiempo = date('Y-m-d H:i:s');

update_proveedor($dbcon,$nombre,$id_proveedor,$tiempo);


function update_proveedor($dbcon,$nombre,$id_proveedor,$tiempo)
{

  $query="UPDATE tbl_proveedor SET nombre='".$nombre."',fecha_inclucion='".$tiempo."' WHERE id_proveedor='".$id_proveedor."' ";
  $results = $dbcon->prepare($query);
  $results->execute();
}
 ?>


<script>
alert("Registro actualizado exitosamente")
 window.location.href='proveedor.php';
 </script>
