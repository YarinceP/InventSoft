<?php

$usuario="root";
$clave="";

function conexion($usuario,$clave){

  try {
    //Instanciamos la clase PDO que recibe como parametro
    $db = new PDO("mysql:host=127.0.0.1;dbname=inventsoft",$usuario,$clave);
    return $db;
  } catch (PDOException $e) {
    echo "Error: ".$e;
  }

}
























/*
class Conexion
{
    private static $instancia;
    private $dbh;

    private function __construct()
    {
        try {

            $this->dbh = new PDO('mysql:host=localhost;dbname=inventsoft', 'root', '');
            $this->dbh->exec("SET CHARACTER SET utf8");

        } catch (PDOException $e) {

            print "Error!: " . $e->getMessage();

            die();
        }
    }

    public function prepare($sql)
    {

        return $this->dbh->prepare($sql);

    }

    public static function singleton_conexion()
    {

        if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;

        }

        return self::$instancia;

    }


     // Evita que el objeto se pueda clonar
    public function __clone()
    {

        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);

    }
}*/
?>
