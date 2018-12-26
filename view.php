<?php

session_start();
if(empty($_SESSION)) {
  header("Location: index.php");  
}

// conectamos a la database

include('conexion.php');

// get results from database

$stmt = $conexion->query('SELECT * from usuario ORDER BY idusuario ASC');

$stmt->setFetchMode(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets\img\registro.png">
    <title>SIGANE | Planilla de Registro Usuario</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/plugins/bootstrap/bootstrap3.min.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap/datepicker.css" rel="stylesheet" type="text/css" />
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/header-user-dropdown.css">

    
  </head>

  <body class="bg-light">


<header class="header-user-dropdown fixed-top">

  <div class="header-limiter">
    <h1><img class="d-block mx-auto mb-4" src="assets/img/sigane2.png" alt="" ></h1>

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
         <h2>Registro de Usuarios</h2>
        <p class="lead"></p>
        </div>         
          
            <div class="row">
              
                 <div class="table-responsive">  
                     <table id="usuario_data" class="table table-condensed table-hover table-striped table-bordered cellspacing="0" data-toggle="bootgrid">  
                          <thead>  
                               <tr>  
                                    <th data-column-id="name">Nombre</th>  
                                    <th data-column-id="ce">Cedula</th>  
                                    <th data-column-id="cargo">Cargo</th> 
                                    <th data-column-id="tipo">Tipo</th>  
                                    <th data-column-id="user">Usuario</th>  
                                    <th data-column-id="passw">Password</th> 
                                    <th data-column-id="iduser">ID</th>                                    
                                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Comandos</th>   
                               </tr>  
                          </thead>  
                          <tbody>  
                          <?php  
                          while ($row = $stmt->fetch()) 
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["nombreusuario"].'</td>  
                                    <td>'.$row["cedulausuario"].'</td>  
                                    <td>'.$row["cargo"].'</td>
                                    <td>'.$row["tipousuario"].'</td>  
                                    <td>'.$row["username"].'</td>  
                                    <td>'.$row["password"].'</td> 
                                    <td>'.$row["idusuario"].'</td>
                                    <td><div class="btn-group" data-toggle="buttons"><a href="edit_usuario.php?id=' . $row['idusuario'] . '" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a><a href="delete.php?id=' . $row['idusuario'] . '" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a><a href="view.php?id=' . $row['idusuario'] . '" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> </a></div></td>
                               </tr>  
                               
                               ';  
                          }  
                          ?>  
                         
                          </tbody>  
                     </table>  
                </div> <!-- end of row -->

            </div>

            <hr class="mb-4">
            
          
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
    <script src="assets/scripts/Login.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap-datepicker.js"></script>
    
</body>
</html>