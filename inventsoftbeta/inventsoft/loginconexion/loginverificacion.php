<?php
require_once 'loginclass.php';
//accedemos al método singleton que es quién crea la instancia
//de nuestra clase y así podemos acceder sin necesidad de
//crear nuevas instancias, lo que ahorra consumo de recursos
$nuevoSingleton = Login::singleton_login();

if(isset($_POST['nick']))
{
 $nick = $_POST['nick'];
 $password = $_POST['password'];
 //accedemos al método usuarios y los mostramos
 $usuario = $nuevoSingleton->login_users($nick,$password);

 if($usuario == TRUE)
 {
 header("Location: ../index.php");
}else{
  echo "usuario o contraseña incorrecta";
  header("Location:../login.php");
}
}
?>
