<?php session_start() ?>
<?php
require_once 'conexion/conexion.php';
$dbcon=Conexion::singleton_conexion();

//if (isset($_SESSION['user'])) {?>


<!DOCTYPE html>
<html>
  <head>
    <title>Inicio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>

    <div class="page-content">

    	<div class="row">
		  <div class="col-md-2 ">
		  	<div class="sidebar content-box" style="display: block; ">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav"></button>
                <ul class="nav" id="nav">
                    <!-- Main menu -->

                    <li><a href="#"><i class="glyphicon glyphicon-record"></i> Ventas</a></li>
                    <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Productos</a></li>
                    <li class="submenu">
                         <a href="#"> <i class="glyphicon glyphicon-off"></i>Sesion<span class="caret pull-right"></span> </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="login.php">Login</a></li>

                            <li><a href="logout.php" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">Cerrar sesion</a></li>
                        </ul>
                    </li>
                </ul>
             </div>

    </div>

		  <div class="col-md-10">




    </div>
  </div>
</div>




    <script type="text/javascript">
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();
    });
    </script>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
<?php
/*}else {
  header("Location: login.php");

}?>*/
