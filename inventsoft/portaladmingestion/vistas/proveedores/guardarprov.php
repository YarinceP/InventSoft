<?php

require_once("../conexion/conexion.php");
$base=Conexion::singleton_conexion();

$nombre = $_POST['nombre'];
$pais = $_POST['pais'];
$ciudad = $_POST['ciudad'];


if (isset($nombre)) {
  $sql="INSERT INTO tbl_proveedor(nombre,pais,ciudad) VALUES (:nom, :pai, :ciu)";
  $res = $base->prepare($sql);
  $res->execute(array(":nom"=>$nombre, ":pai"=>$pais, ":ciu"=>$ciudad));
  
  header("Location: proveedores.php");

}else{


}




?>
