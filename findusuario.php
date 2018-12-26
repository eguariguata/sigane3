<?php 
session_start();
if(empty($_SESSION)) {
  header("Location: index.php");  
}
?>
<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets\img\registro.png">
    <title>SIGANE | Planilla de Registro Usuario</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/header-user-dropdown.css">
   
    <script>
$(document).ready(function(){
  
});


</script>
  </head>

  <body class="bg-light">


<header class="header-user-dropdown fixed-top">

  <div class="header-limiter">
    <h1><img class="d-block mx-auto mb-4" src="assets/img/sigane2.png" alt="" width="177" height="60"></h1>

    <nav>
      <a href="inicio.php"><i class="fa fa-home fa-fw"></i></a>
      <a href="#">Nuevo</a>
      <a href="#">Modificar</a>
      <a href="#">Consultar</a>
      <a href="#">Eliminar</a>
      <a href="#">Reportes</a>
    </nav>


    <div class="header-user-menu">
      <img src="assets/img/2.jpg" alt="User Image"/>

      <ul>
        <li><a href="regusuario.php"><i class="fa fa-user"></i> Crear Usuario</a></li>
        <li class="divider"></li>
        <li><a href="logout.php"><i class="fa fa-gear fa-fw"></i> Configuración</a></li>
        <li class="divider"></li>
        <li><a href="logout.php" class="highlight"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a></li>
      </ul>
    </div>

  </div>

</header><br><br><br>


    <div class="container">
      
      <div class="row">
        <div class="col-md-3 order-md-1 mb-3"><br>
         <div class="list-group ">
            <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
            <a href="planillaregistro.php" class="list-group-item list-group-item-action">Nuevo Registro</a>
            <a href="findusuario.php" class="list-group-item list-group-item-action">Modificar Registro</a>
            <a href="view.php" class="list-group-item list-group-item-action">Consultar Registro</a>
            <a href="#" class="list-group-item list-group-item-action">Eliminar Registro</a>
            <a href="#" class="list-group-item list-group-item-action">Reportes</a>   
          </div>          
        </div>

        <!-- main content -->
        <div class="col-md-9 order-md-2">
          <div class="py-5 text-center">
        <!-- <img class="d-block mx-auto mb-4" src="assets/img/iutoms.jpg" alt="" width="72" height="72"> -->
        <h2>Registro de Usuarios</h2>
        <p class="lead"></p>
        </div>
    
          <h5 class="mb-3">Editar Datos del Usuario</h5><br>

          <?php if (isset($msg)){ ?>
    <div <?php echo $class_stat;?> role="alert"><?php echo $msg; ?><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></div>
  <?php } ?>
          
          <form class="needs-validation" novalidate="" method="post" action="edit_usuario.php" name="display">
            <div class="row">
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">
                <label for="idxusuario">ID del usuario:</label>
                <input type="text" class="form-control" id="idxusuario" name="idxusuario" placeholder="Indique el ID" value="" required="">
                <div class="invalid-feedback">
                  Se requiere un ID válido.
                </div></div>
              </div>                        
            </div>
                        
            <hr class="mb-4">
            <button class="btn btn-success btn-lg" type="submit" name="submit" value="registrar"><i class="fa fa-search"></i> Buscar</button>
          </form>

        </div><!-- end col-9 -->
      </div><!-- end of row -->
    
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">Bienaventurado el que comienza por educarse antes de dedicarse a perfeccionar a los demás. Juan C. Abella </p>
        
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/js/jquery-3.3.1.min.js"></script>    
    <script src="assets/plugins/js/mask-script.js"></script>
    <script src="assets/scripts/Login.js"></script>
    
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    
</body></html>