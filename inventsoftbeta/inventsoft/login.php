<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>

    <body class="bg-dark">
      <div class="container">
  <h2>Acceso al sistema</h2>
  <form action="loginconexion/loginverificacion.php" method="post">
    <div class="form-group">
      <label for="email">Usuario:</label>
      <input type="text" class="form-control" id="user" placeholder="Ingrese su Usuario" name="nick">
    </div>
    <div class="form-group">
      <label for="pwd">Contraseña:</label>
      <input type="password" class="form-control" id="pwd" placeholder="ingrese su contraseña" name="password">
    </div>

    <button type="submit" class="btn btn-primary">Ingresar</button>
  </form>
</div>
      <!-- Bootstrap core JavaScript-->
      <script src="bootstrap/js/jquery/jquery.min.js"></script>
      <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->

    </body>
</html>
