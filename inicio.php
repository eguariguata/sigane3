<?php 
session_start();
if(empty($_SESSION)) {
  header("Location: index.php");  
}
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets\img\registro.png">
    <title>SIGANE | Pagina Principal</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="assets/css/header-user-dropdown.css">
    <link rel="stylesheet" href="assets/css/style2.css">    
  </head>

  <body class="bg-light">
    <header class="header-user-dropdown fixed-top">
      <div class="header-limiter">
        <h1><img class="d-block mx-auto mb-4" src="assets/img/sigane2.png"></h1>
        <div class= pull-right>
          <nav>
            <a href="inicio.php"><i class="fa fa-reply fa-2x"></i></a>
          </nav>
        </div>  
        <div class="header-user-menu">
          <div>
          <img src="assets\img\logueado.jpg" alt="User Image"/>
          <ul>
            <li><a href="regusuario.php"><i class="fa fa-user"></i> Crear usuario</a></li>
            <li class="divider"></li>
            <li><a href="findusuario.php" class="highlight"><i class="fa fa-gear fa-fw"></i> Editar usuario</a></li>
            <li class="divider"></li>
            <li><a href="logout.php" class="highlight"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a></li>
          </ul>
          </div>
        </div>
    </header><br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-md-3 order-md-1 mb-3"><br><br>
          <div class="list-group ">
            <a href="planillaregistro.php" class="list-group-item list-group-item-action">Nuevo Registro</a>
            <a href="findusuario.php" class="list-group-item list-group-item-action">Modificar Registro</a>
            <a href="view.php" class="list-group-item list-group-item-action">Modificar, Eliminar o Consultar Registro</a>
            <a href="#" class="list-group-item list-group-item-action">Eliminar Registro</a>
            <a href="#" class="list-group-item list-group-item-action">Reportes</a>   
          </div>           
        </div>
        <!-- main content -->
        <div class="col-md-9 order-md-2">
          <div class="py-5 text-center">
            <h2>Centro de Educación Inicial Parque la Paz</h2>
            <p class="lead">Registro de Pre-Inscripción</p>
          </div>       
          <div class="row">
              <img src="assets/img/bandera.jpg" alt="">
          </div>
        </div><!-- end col-9 -->
      </div><!-- end of row -->
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">"Bienaventurado el que comienza por educarse antes de dedicarse a perfeccionar a los demás".  Juan C. Abella </p>
      </footer>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/js/jquery-3.3.1.min.js"></script>    
    <script src="assets/plugins/js/jquery.mask.min.js"></script>
    <script src="assets/plugins/js/mask-script.js"></script>
    <script src="assets/scripts/Login.js"></script>
    <!-- <script src="assets/plugins/bootstrap/bootstrap-datepicker.js"></script> -->
  </body>
</html>