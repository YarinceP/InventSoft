<?php
include("../conexion/conexion.php");
$dbcon = Conexion::singleton_conexion();
//date_default_timezone_set('America/Tegucigalpa');
update_proveedor($dbcon,$_GET['id']);
function update_proveedor($dbcon,$id_proveedor)
{
$desabilitado=0;// El vallor 0 se traduce a desabilitado en la base de datos.
  $query="UPDATE tbl_proveedor SET estado= '".$desabilitado."'  WHERE id_proveedor='".$id_proveedor."' ";
  $results = $dbcon->prepare($query);
  $results->execute();
}
?>
<script>
alert("Registro eliminado exitosamente")//Mensaje emegernte.
 window.location.href='proveedor.php';//Redireccionamiento al archivo donde se muestra la tabla.
 </script>
