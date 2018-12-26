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
    <link href="assets/plugins/bootstrap/datepicker.css" rel="stylesheet" type="text/css" />
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/header-user-dropdown.css">
    <link href="./checkout_files/form-validation.css" rel="stylesheet">
    
  </head>

  <body class="bg-light">


<header class="header-user-dropdown fixed-top">

  <div class="header-limiter">
    <h1><img class="d-block mx-auto mb-4" src="assets/img/sigane2.png" alt="" ></h1>

     <nav>
      <a href="index.html"><i class="fa fa-home"></i></a>
      <a href="logout.php"><i class="fa fa-home"></i></a>
      <a href="inicio.php"><i class="fa fa-home"></i></a>
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
        <div class="col-md-3 order-md-1 mb-3"><br><br>
          <div class="list-group ">
            <a href="#" class="list-group-item list-group-item-action active">PANEL DE REGISTRO ESCOLAR</a>
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
          <h2>Registro de Usuarios</h2>
        <p class="lead"></p>
      </div>
    
          <h5 class="mb-3">Datos del Usuario</h5><br>
          
          <form class="needs-validation" novalidate="" method="post" action="nuevoregistro.php">
            <div class="row">
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">
                <label for="nombreusuario">Nombre y Apellido</label>
                <input type="text" class="form-control" id="nombreusuario" name="nombreusuario" placeholder="Nombre y Apellido" value="" required="">
                <div class="invalid-feedback">
                  Ingrese un nombre válido.
                </div></div>
              </div>
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">
                <label for="cedulausuario">Cedula</label>
                <input type="numeric" class="form-control" id="cedulausuario" name="cedula" placeholder="Cedula (Sin puntos ni espacios)" value="" required="">
                <div class="invalid-feedback">
                  Ingrese una cedula válida.
                </div></div>
              </div>
              <div class="col-4 col-md-4 mb-3">
              <div class="form-group">                
                <label for="cargousurio">Cargo</label>
                <select class="custom-select d-block w-100" id="cargousurio" name="cargo" required="">
                  <option value="">Seleccione...</option>
                  <option>Director(a)</option>
                  <option>Subdirector(a)</option>
                  <option>Coordinador(a)</option>
                  <option>Secretario(a)</option>
                  <option>Docente</option>
                </select>
                <div class="invalid-feedback">
                  Seleccione un cargo.
                </div></div>
              </div>
            </div>

            <div class="row">              
              <div class="col-4 col-md-4 mb-3">
              <div class="form-group">                
                <label for="tipousuario">Tipo de Usuario</label>
                <select class="custom-select d-block w-100" id="tipousuario" name="tipousuario" required="">
                  <option value="">Seleccione...</option>
                  <option>Administrador</option>
                  <option>Usuario</option>
                </select>
                <div class="invalid-feedback">
                  Seleccione un usuario.
                </div></div>
              </div>
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="" required="">
                <div class="invalid-feedback">
                  Ingrese un usuario válido.
                </div></div>
              </div>
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" id="password" name="password" placeholder="Password" value="" required="">
                <div class="invalid-feedback">
                  Ingrese una contraseña válida.
                </div></div>
              </div>
            </div><!-- end row -->
     


            
            
            <hr class="mb-4">
            <button class="btn btn-success btn-lg" type="submit" value="registrar"><i class="fa fa-save"></i> Guardar</button>
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
    <script src="assets/plugins/js/jquery.mask.min.js"></script>
    <script src="assets/plugins/js/mask-script.js"></script>
    <script src="assets/scripts/Login.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap-datepicker.js"></script>
    
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
    <script type="text/javascript">
       $(function () {
            $(".date").datepicker({
                autoclose: true,
                todayHighlight: true
            });
        });
    </script>
</body></html>