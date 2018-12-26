<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets\img\registro.png">
    <title>SIGANE | Planilla de Registro</title>

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
    <h1><img class="d-block mx-auto mb-4" src="assets/img/sigane2.png"></h1>

    <nav>
          <a href="inicio.php"><i class="fa fa-home fa-3x"></i></a>
          <a href="logout.php"><i class="fa fa-sign-out fa-3x"></i></a>
    </nav>


    <div class="header-user-menu">
      <img src="assets/img/logueado.jpg" alt="User Image"/>

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
        
        <h2>CENTRO DE EDUCACIÓN INICIAL PARQUE LA PAZ</h2>
        <h4 class="mb-3">Sistema de Registro</h4>
        <br>
        <form class="needs-validation" novalidate="" method="post" action="nuevoregistro.php">
        <h3 class="mb-3">FICHA DE INSCRIPCIÓN</h3>
          </div>  
          <div class="col-3 col-md-3 mb-3">
            <div class="form-group">
              <label for="fecharegistro">Fecha de registro</label>
              <div class="input-group date">
                <input class="form-control" type="text" id="fecharegistro" name="fecharegistro"/>
                  <span class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">
                      <i class="fa fa-calendar"></i>
                    </button>
                  </span>
              </div>
              <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
              </div>
            </div>
          </div>
          <div class="py-5 text-center">
          <h5 class="mb-1">DATOS DE REGISTRO</h5>
          </div>
        <!--<form class="needs-validation" novalidate="" method="post" action="nuevoregistro.php"> -->
            <div class="row">
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">
                <label for="nombres">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" value="" required=""><span class="add-on"><i class="icon-calendar"></i></span>
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div>
                </div>
              </div>
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" value="" required="">
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div>
                </div>
              </div>
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">
                <label for="añoescolar">Año Escolar</label>
                <input type="text" class="form-control" id="añoescolar" name="añoescolar" placeholder="Año Escolar" value="" required="">
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div>
                </div>
              </div>
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">                
                  <label for="grupo">Grupo</label>
                  <select class="custom-select d-block w-100" id="grupo" name="grupo" required="">
                  <option value="">Seleccione...</option>
                  <option>Mañana</option>
                  <option>Tarde</option>
                  </select>
                  <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                  </div>
                </div>
              </div>
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">                
                  <label for="seccion">Sección</label>
                  <select class="custom-select d-block w-100" id="seccion" name="seccion" required="">
                  <option value="">Seleccione...</option>
                  <option>"A"</option>
                  <option>"B"</option>
                  <option>"C"</option>
                  <option>"D"</option>
                  <option>"E"</option>
                  <option>"F"</option>
                  </select>
                  <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                  </div>
                </div>
              </div>
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">
                <label for="cedulaescolar">Cédula Escolar</label>
                <input type="text" class="form-control" id="cedulaescolar" name="cedulaescolar" placeholder="Cédula Escolar" value="" required="">
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div>
                </div>
              </div>
            </div>
            <hr class="mb-1">
              <div class="py-5 text-center">
                <h5 class="mb-2">DATOS DEL ESTUDIANTE</h5>
              </div>
            <div class="row">
            <div class="col-3 col-md-3 mb-3">
              <div class="form-group">
                <label for="fechanacimiento">Fecha de Nacimiento</label>
                  <div class="input-group date">
                    <input class="form-control" type="text" id="fechanacimiento" name="fechanacimiento"/>
                    <span class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-calendar"></i>
                    </button>
                    </span>
                  </div>
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div>
              </div>
            </div>              
              <div class="col-3 col-md-3 mb-3">
              <div class="form-group">                
                <label for="estado">Estado</label>
                <select class="custom-select d-block w-100" id="estado" name="estado" required="">
                  <option value="">Seleccione...</option>
                  <option>Distrito Capital</option>
                  <option>Miranda</option>
                  <option>Sucre</option>
                  <option>Carabobo</option>
                  <option>Cojedes</option>
                  <option>Guárico</option>
                  <option>Anzoátegui</option>
                  <option>Nueva Esparta</option>
                  <option>Apure</option>
                  <option>Merida</option>
                  <option>Trujillo</option>
                  <option>Zulia</option>
                  <option>Amazonas</option>
                  <option>Bolivar</option>
                  <option>Falcón</option>
                  <option>Aragua</option>
                  <option>Barinas</option>
                  <option>Delta Amacuro</option>
                  <option>Lara</option>
                  <option>Monagas</option>
                  <option>Portuguesa</option>
                  <option>Tachira</option>
                  <option>Vargas</option>
                  <option>Yaracuy</option>
                  <option>Dependencias Federales</option>
                </select>
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div></div>
              </div>
              <div class="col-3 col-md-3 mb-3">
              <div class="form-group">                
                <label for="municipio">Municipio</label>
                <select class="custom-select d-block w-100" id="municipio" name="municipio" required="">
                  <option value="">Seleccione...</option>
                  <option>Distrito Capital</option>
                  <option>Miranda</option>
                  <option>Sucre</option>
                  <option>Carabobo</option>
                  <option>Cojedes</option>
                  <option>Guárico</option>
                  <option>Anzoátegui</option>
                  <option>Nueva Esparta</option>
                  <option>Apure</option>
                  <option>Merida</option>
                  <option>Trujillo</option>
                  <option>Zulia</option>
                  <option>Amazonas</option>
                  <option>Bolivar</option>
                  <option>Falcón</option>
                  <option>Aragua</option>
                  <option>Barinas</option>
                  <option>Delta Amacuro</option>
                  <option>Lara</option>
                  <option>Monagas</option>
                  <option>Portuguesa</option>
                  <option>Tachira</option>
                  <option>Vargas</option>
                  <option>Yaracuy</option>
                  <option>Dependencias Federales</option>
                </select>
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div></div>
              </div>
              <div class="col-3 col-md-3 mb-3">
              <div class="form-group">                
                <label for="parroquia">Parroquia</label>
                <select class="custom-select d-block w-100" id="parroquia" name="parroquia" required="">
                  <option value="">Seleccione...</option>
                  <option>Distrito Capital</option>
                  <option>Miranda</option>
                  <option>Sucre</option>
                  <option>Carabobo</option>
                  <option>Cojedes</option>
                  <option>Guárico</option>
                  <option>Anzoátegui</option>
                  <option>Nueva Esparta</option>
                  <option>Apure</option>
                  <option>Merida</option>
                  <option>Trujillo</option>
                  <option>Zulia</option>
                  <option>Amazonas</option>
                  <option>Bolivar</option>
                  <option>Falcón</option>
                  <option>Aragua</option>
                  <option>Barinas</option>
                  <option>Delta Amacuro</option>
                  <option>Lara</option>
                  <option>Monagas</option>
                  <option>Portuguesa</option>
                  <option>Tachira</option>
                  <option>Vargas</option>
                  <option>Yaracuy</option>
                  <option>Dependencias Federales</option>
                </select>
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div></div>
              </div>
              </div><!-- end row -->
              <div class="row"> 
                <div class="col mb-3">
                  <div class="form-group">
                  <label for="direccionalumno">Dirección de Habitación</label>
                  <textarea id="direccionalumno" name="direccionalumno" rows="2" class="form-control" placeholder="Dirección" required=""></textarea>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
              </div><!-- end row -->
              <div class="row">
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="telefono1">Telefono de Habitación</label>
                    <input type="text" class="form-control" id="telefono1" name="telefono1" placeholder="Telefono de Habitación" value="" required=""><span class="add-on"></span>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="eseguromedico">Seguro Medico</label>
                    <select class="custom-select d-block w-100" id="seguromedico" name="seguromedico" required="">
                    <option value="">Seleccione...</option>
                    <option>Si</option>
                    <option>No</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="seguronombre">Nombre de la aseguradora</label>
                    <input type="text" class="form-control" id="seguronombre" name="seguronombre" placeholder="Nombre del Seguro" value="" required=""><span class="add-on"></span>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="procedencia">Procedencia del niño</label>
                    <select class="custom-select d-block w-100" id="procedencia" name="procedencia" required="">
                    <option value="">Seleccione...</option>
                    <option>Plantel</option>
                    <option>Hogar</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-8 mb-3">
                  <div class="form-group">
                    <label for="nombreplantel">Nombre del Plantel</label>
                    <input type="text" class="form-control" id="nombreplantel" name="nombreplantel" placeholder="Nombre del Plantel" value="" required=""><span class="add-on"></span>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
              </div><!-- end row -->
              <hr class="mb-1">
              <div class="py-5 text-center">
                <h5 class="mb-2">DOCUMENTOS ENTREGADOS</h5>
              </div>
            <div class="row">
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="partidanac1">Partida de Nacimiento</label>
                    <select class="custom-select d-block w-100" id="partidanac1" name="partidanac1" required="">
                    <option value="">Seleccione...</option>
                    <option>Si</option>
                    <option>No</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="vacunas">Certificado de Vacunas</label>
                    <select class="custom-select d-block w-100" id="vacunas" name="vacunas" required="">
                    <option value="">Seleccione...</option>
                    <option>Si</option>
                    <option>No</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="fotoniño">Foto del Niño</label>
                    <select class="custom-select d-block w-100" id="fotoniño" name="fotoniño" required="">
                    <option value="">Seleccione...</option>
                    <option>Si</option>
                    <option>No</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="cedularepre">Cedula del Representante</label>
                    <select class="custom-select d-block w-100" id="cedularepre" name="cedularepre" required="">
                    <option value="">Seleccione...</option>
                    <option>Si</option>
                    <option>No</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="fotorepre">Foto del Representante</label>
                    <select class="custom-select d-block w-100" id="fotorepre" name="fotorepre" required="">
                    <option value="">Seleccione...</option>
                    <option>Si</option>
                    <option>No</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="constaciatrab">Constancia de Trabajo</label>
                    <select class="custom-select d-block w-100" id="constaciatrab" name="constaciatrab" required="">
                    <option value="">Seleccione...</option>
                    <option>Si</option>
                    <option>No</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="boletin">Boletin Informativo</label>
                    <select class="custom-select d-block w-100" id="boletin" name="boletin" required="">
                    <option value="">Seleccione...</option>
                    <option>Si</option>
                    <option>No</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
            </div><!-- end row -->
<!--                 <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="firstName">Edad</label>
                      <input type="number" class="form-control" id="edad_alumno" name="edad_alumno" placeholder="" value="" required=""><span class="add-on"><i class="icon-calendar"></i></span>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>-->
<!--               <div class="col-3 col-md-3 mb-3">
                <div class="form-group">
                <label for="firstName">N° de Teléfono</label>
                <input type="text" class="form-control" id="phone-number" name="phone-number" placeholder="" value="" required=""><span class="add-on"><i class="icon-calendar"></i></span>
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div></div>
              </div> -->
<!--             <div class="row"> 
              <div class="col mb-3">
                <div class="form-group">
                <label for="direccion_alumno">Dirección</label>
                <textarea id="direccion_alumno" name="direccion_alumno" rows="2" class="form-control" placeholder="Dirección" required=""></textarea>
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div></div>
              </div>
            </div><!-- end row -->
            <hr class="mb-1">
              <div class="py-5 text-center">
                <h5 class="mb-2">DATOS FAMILIARES</h5>
              </div>
              <div class="row"> 
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="representante">Representante</label>
                    <select class="custom-select d-block w-100" id="representante" name="representante" required="">
                    <option value="">Seleccione...</option>
                    <option>Madre</option>
                    <option>Padre</option>
                    <option>Otro</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
              </div><!-- end row -->
            <div class="row"> 
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">
                <label for="nombresrepre">Nombres</label>
                <input type="text" class="form-control" id="nombresrepre" name="nombresrepre" placeholder="Nombres" value="" required=""><span class="add-on"><i class="icon-calendar"></i></span>
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div>
                </div>
              </div>
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">
                <label for="apellidosrepre">Apellidos</label>
                <input type="text" class="form-control" id="apellidosrepre" name="apellidosrepre" placeholder="Apellidos" value="" required="">
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div>
                </div>
              </div>
            </div><!-- end row -->
            
            
            <hr class="mb-4">
            

            <h5 class="mb-3">Datos Familiares</h5><br>

            
            <div class="row">
              <div class="col-8 col-md-8 mb-3">
                <div class="form-group">
                <label for="nombre_madre">Nombres y Apellidos de la Madre</label>
                <input type="text" class="form-control" id="nombre_madre" name="nombre_madre" placeholder="" required="">
                <small class="text-muted">Nombre completo</small>
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div></div>
              </div>
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">
                <label for="ci_madre">Cedula de Identidad</label>
                <input type="text" class="form-control" id="ci_madre" name="ci_madre" placeholder="" required="">
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div></div>
              </div>
            </div>
            <div class="row">
              <div class="col-8 col-md-8 mb-3">
                <div class="form-group">
                <label for="empresa_madre">Empresa Donde Trabaja</label>
                <input type="text" class="form-control" id="empresa_madre" name="empresa_madre" placeholder="" required="">
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div></div>
              </div>
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">
                <label for="telefono_madre">N° de Teléfono</label>
                <input type="text" class="form-control" id="telefono_madre" name="telefono_madre" placeholder="" required="">
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div></div>
              </div>
            </div>
            <div class="row">
              <div class="col-8 col-md-8 mb-3">
                <div class="form-group">
                <label for="nombre_padre">Nombres y Apellidos del Padre</label>
                <input type="text" class="form-control" id="nombre_padre" name="nombre_padre" placeholder="" required="">
                <small class="text-muted">Nombre completo</small>
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div></div>
              </div>
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">
                <label for="ci_padre">Cedula de Identidad</label>
                <input type="text" class="form-control" id="ci_padre" name="ci_padre" placeholder="" required="">
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div></div>
              </div>
            </div>
            <div class="row">
              <div class="col-8 col-md-8 mb-3">
                <div class="form-group">
                <label for="empresa_padre">Empresa Donde Trabaja</label>
                <input type="text" class="form-control" id="empresa_padre" name="empresa_padre" placeholder="" required="">
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div></div>
              </div>
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">
                <label for="telefono_padre">N° de Teléfono</label>
                <input type="text" class="form-control" id="telefono_padre" name="telefono_padre" placeholder="" required="">
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div></div>
              </div>
            </div>

            <hr class="mb-4">

            <h5 class="mb-3">Datos del Representante Legal</h5><br>

            
            <div class="row">
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">
                <label for="nombre_representante">Nombres y Apellidos</label>
                <input type="text" class="form-control" id="nombre_representante" name="nombre_representante" placeholder="" required="">
                <small class="text-muted">Nombre completo</small>
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div></div>
              </div>
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">
                <label for="ci_representante">Cedula de Identidad</label>
                <input type="text" class="form-control" id="ci_representante" name="ci_representante" placeholder="" required="">
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div></div>
              </div>
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">
                <label for="parentesco">Parentesco</label>
                <select class="custom-select d-block w-100" id="parentesco" name="parentesco" required="">
                  <option value="">Seleccione...</option>
                  <option>Madre</option>
                  <option>Padre</option>
                  <option>Abuela</option>
                </select>
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div></div>
              </div>
            </div>

            <div class="row"> 
              <div class="col mb-3">
                <div class="form-group">
                <label for="direc_representante">Dirección</label>
                <input type="text" class="form-control" id="direc_representante" name="direc_representante" placeholder="Dirección" required="">
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div></div>
              </div>
            </div><!-- end row -->

            <div class="row">              
              <div class="col-4 col-md-4 mb-3"> 
              <div class="form-group">               
                <label for="profesion">Profesión</label>
                <input type="text" class="form-control" id="profesion" name="profesion" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div></div>
              </div>
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">
                <label for="empre_repres">Empresa</label>
                <input type="text" class="form-control" id="empre_repres" name="empre_repres" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div></div>
              </div>
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">
                <label for="tele_repre">Número Telefonico</label>
                <input type="text" class="form-control" id="tele_repre" name="tele_repre" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div></div>
              </div>
            </div><!-- end row -->
            
            <hr class="mb-4">
            <button class="btn btn-success btn-lg" type="submit" value="registrar"><i class="fa fa-save"></i> Enviar</button>
          </form>
        </div><!-- end col-9 -->
      </div><!-- end of row -->
   
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">"Lo que se les dé a los niños, los niños darán a la sociedad". Karl A. Menninger</p>
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