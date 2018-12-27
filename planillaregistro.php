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
        <div class= pull-right>
          <nav>
            <a href="inicio.php"><i class="fa fa-reply fa-2x"></i></a>
          </nav>
        </div>
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
<!-- inicio row -->
      <div class="row">
        <div class="col-md-3 order-md-1 mb-3"><br><br>
          <div class="list-group ">
            <a href="#" class="list-group-item list-group-item-action active"></a>
            <a href="planillaregistro.php" class="list-group-item list-group-item-action">Nuevo Registro</a>
            <a href="findusuario.php" class="list-group-item list-group-item-action">Modificar Registro</a>
            <a href="view.php" class="list-group-item list-group-item-action">Consultar Registro</a>
            <a href="#" class="list-group-item list-group-item-action">Eliminar Registro</a>
            <a href="#" class="list-group-item list-group-item-action">Reportes</a>   
          </div>           
        </div>  
        <div class="col-md-9 order-md-2">
          <div class="py-5 text-center">
            <h2>CENTRO DE EDUCACIÓN INICIAL PARQUE LA PAZ</h2>
            <h4 class="mb-3">Sistema de Preinscripción</h4>
            <br>
            <form class="needs-validation" novalidate="" method="post" action="nuevoregistro.php">
            <h3 class="mb-3">FICHA DE REGISTRO</h3>
          </div>  
          <div class="col-3 col-md-3 mb-3">
            <div class="form-group">
              <label for="fecharegistro">Fecha de registro</label>
              <div class="input-group date">
                <input class="form-control" type="text" id="fecharegistro" name="fecharegistro" placeholder="Seleccione..."/><span class="input-group-append">
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
          <button type="button" class="btn btn-primary btn-lg btn-block">DATOS DE REGISTRO</button>
          <br>
<!-- inicio row -->
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
              <div class="col-4 col-md-4 mb-3">
                <div class="form-group">
                  <label for="cedulaescolar">Edad</label>
                  <input type="text" class="form-control" id="edad" name="edad" placeholder="Edad" value="" required="">
                  <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                  </div>
                </div>
              </div>
            </div>
<!-- end row -->
          <button type="button" class="btn btn-primary btn-lg btn-block">DATOS DEL ESTUDIANTE</button>
          <br>
<!-- inicio row -->
              <div class="row">
                <div class="col-3 col-md-3 mb-3">
                  <div class="form-group">
                    <label for="fechanacimiento">Fecha de Nacimiento</label>
                    <div class="input-group date">
                      <input class="form-control" type="text" id="fechanacimiento" name="fechanacimiento" placeholder="Seleccione..."/>
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
                  </div>
                </div>
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
                  </div>
                </div>
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
                  </div>
                </div>
              </div>
              </div>
              <!-- end row -->
              <!-- inicio row -->
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
              </div>
<!-- end row -->
<!-- inicio row -->
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
                    <label for="seguronombre">Nombre de la Aseguradora</label>
                    <input type="text" class="form-control" id="seguronombre" name="seguronombre" placeholder="Nombre del Seguro" value="" required=""><span class="add-on"></span>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="procedencia">Procedencia del Niño</label>
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
              </div>
<!-- end row -->
          <button type="button" class="btn btn-primary btn-lg btn-block">DATOS FAMILIARES</button>
          <br>
          <button type="button" class="btn btn-success">DATOS DE LA MADRE</button>
          <br><br>
<!-- inicio row -->
              <div class="row"> 
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="representantemadre">Representante</label>
                    <select class="custom-select d-block w-100" id="representantemadre" name="representantemadre" required="">
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
                  <label for="telefonocelularmadre">Teléfono Celular</label>
                  <input type="text" class="form-control" id="telefonocelularmadre" name="telefonocelularmadre" placeholder="Celular" required="">
                  <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                  </div></div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                  <label for="telefonolocalmadre">Teléfono Local</label>
                  <input type="text" class="form-control" id="telefonolocalmadre" name="telefonolocalmadre" placeholder="Local" required="">
                  <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                  </div></div>
                </div>
              </div>
<!-- end row -->
<!-- inicio row -->
              <div class="row">
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="nombremadre">Nombres</label>
                    <input type="text" class="form-control" id="nombremadre" name="nombremadre" placeholder="Nombres" value="" required=""></span>
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div> 
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="apellidomadre">Apellidos</label>
                    <input type="text" class="form-control" id="apellidomadre" name=apellidomadre" placeholder="Apellidos" required="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="cimadre">Cedula de Identidad o Pasaporte</label>
                    <input type="text" class="form-control" id="cimadre" name="cimadre" placeholder="Cedula o Pasaporte" required="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="edadmadre">Edad</label>
                    <input type="text" class="form-control" id="edadmadre" name="edadmadre" placeholder="Edad" required="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="edocivilmadre">Estado Civil</label>
                    <select class="custom-select d-block w-100" id="edocivilmadre" name="edocivilmadre" required="">
                    <option value="">Seleccione...</option>
                    <option>Casada</option>
                    <option>Soltera</option>
                    <option>Divorciada</option>
                    <option>Concuvinato</option>
                    <option>Viuda</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="nacionalidadmadre">Nacionalidad</label>
                    <select class="custom-select d-block w-100" id="nacionalidadmadre" name="nacionalidadmadre" required="">
                    <option value="">Seleccione...</option>
                    <option>Venezolana</option>
                    <option>Extranjera</option>
                    <option>Nacionalizada</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="trabajamadre">Trabaja?</label>
                    <select class="custom-select d-block w-100" id="trabajamadre" name="trabajamadre" required="">
                    <option value="">Seleccione...</option>
                    <option>Si</option>
                    <option>No</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-8 col-md-8 mb-3">
                <div class="form-group">
                <label for="empresamadre">Empresa Donde Trabaja</label>
                <input type="text" class="form-control" id="empresamadre" name="empresamadre" placeholder="Empresa" required="">
                <div class="invalid-feedback">
                  Por favor ingrese los datos correspondientes.
                </div></div>
              </div>
              </div>
<!-- end row -->
<!-- inicio row -->
            <div class="row">
              <div class="col mb-3">
                <div class="form-group">
                <label for="direccionmadre">Dirección</label>
                <textarea id="direccionmadre" name="direccionmadre" rows="2" class="form-control" placeholder="Dirección" required=""></textarea>
                  <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                  </div>
                </div>
              </div>
            </div>
<!-- end row -->
          <button type="button" class="btn btn-success">DATOS DEL PADRE</button>
          <br><br>
<!-- inicio row -->
              <div class="row"> 
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="representantepadre">Representante</label>
                    <select class="custom-select d-block w-100" id="representantepadre" name="representantepadre" required="">
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
                    <label for="telefonocelularpadre">Teléfono Celular</label>
                    <input type="text" class="form-control" id="telefonocelularpadre" name="telefonocelularpadre" placeholder="Celular" required="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="telefonolocalpadre">Teléfono Local</label>
                    <input type="text" class="form-control" id="telefonolocalpadre" name="telefonolocalpadre" placeholder="Local" required="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
              </div>
<!-- end row -->
<!-- inicio row -->
              <div class="row">
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="nombrepadre">Nombres</label>
                    <input type="text" class="form-control" id="nombrepadre" name="nombrepadre" placeholder="Nombres" value="" required=""></span>
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div> 
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="apellidopadre">Apellidos</label>
                    <input type="text" class="form-control" id="apellidopadre" name=apellidopadre" placeholder="Apellidos" required="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="cipadre">Cedula de Identidad o Pasaporte</label>
                    <input type="text" class="form-control" id="cipadre" name="cipadre" placeholder="Cedula o Pasaporte" required="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="edadpadre">Edad</label>
                    <input type="text" class="form-control" id="edadpadre" name="edadpadre" placeholder="Edad" required="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="edocivilpadre">Estado Civil</label>
                    <select class="custom-select d-block w-100" id="edocivilpadre" name="edocivilpadre" required="">
                    <option value="">Seleccione...</option>
                    <option>Casado</option>
                    <option>Soltero</option>
                    <option>Divorciado</option>
                    <option>Concuvinato</option>
                    <option>Viudo</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="nacionalidadpadre">Nacionalidad</label>
                    <select class="custom-select d-block w-100" id="nacionalidadpadre" name="nacionalidadpadre" required="">
                    <option value="">Seleccione...</option>
                    <option>Venezolano</option>
                    <option>Extranjero</option>
                    <option>Nacionalizado</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="trabajapadre">Trabaja?</label>
                    <select class="custom-select d-block w-100" id="trabajapadre" name="trabajapadre" required="">
                    <option value="">Seleccione...</option>
                    <option>Si</option>
                    <option>No</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-8 col-md-8 mb-3">
                  <div class="form-group">
                    <label for="empresapadre">Empresa Donde Trabaja</label>
                    <input type="text" class="form-control" id="empresapadre" name="empresapadre" placeholder="Empresa" required="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
              </div>
<!-- end row -->
<!-- inicio row -->
              <div class="row">
                <div class="col mb-3">
                  <div class="form-group">
                    <label for="direccionpadre">Dirección</label>
                    <textarea id="direccionpadre" name="direccionpadre" rows="2" class="form-control" placeholder="Dirección" required=""></textarea>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
              </div>
<!-- end row -->
          <button type="button" class="btn btn-primary btn-lg btn-block">DATOS DE REPRESENTANTE LEGAL</button>
          <br>
<!-- inicio row -->
              <div class="row"> 
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="parentescootro1">Parentesco</label>
                    <input type="text" class="form-control" id="parentescootro1" name="parentescootro1" placeholder="Parentesco" required="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="telefonocelularotro1">Teléfono Celular</label>
                    <input type="text" class="form-control" id="telefonocelularotro1" name="telefonocelularotro1" placeholder="Celular" required="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="telefonolocalotro1">Teléfono Local</label>
                    <input type="text" class="form-control" id="telefonolocalotro1" name="telefonolocalotro1" placeholder="Local" required="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
              </div>
<!-- end row -->
<!-- inicio row -->
              <div class="row">
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="nombreotro1">Nombres</label>
                    <input type="text" class="form-control" id="nombreotro1" name="nombreotro1" placeholder="Nombres" value="" required=""></span>
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div> 
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="apellidootro1">Apellidos</label>
                    <input type="text" class="form-control" id="apellidootro1" name=apellidootro1" placeholder="Apellidos" required="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="ciotro1">Cedula de Identidad o Pasaporte</label>
                    <input type="text" class="form-control" id="ciotro1" name="ciotro1" placeholder="Cedula o Pasaporte" required="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="edadotro1">Edad</label>
                    <input type="text" class="form-control" id="edadotro1" name="edadotro1" placeholder="Edad" required="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="edocivilotro1">Estado Civil</label>
                    <select class="custom-select d-block w-100" id="edocivilotro1" name="edocivilotro1" required="">
                    <option value="">Seleccione...</option>
                    <option>Casado</option>
                    <option>Soltero</option>
                    <option>Divorciado</option>
                    <option>Concuvinato</option>
                    <option>Viudo</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="nacionalidadotro1">Nacionalidad</label>
                    <select class="custom-select d-block w-100" id="nacionalidadotro1" name="nacionalidadotro1" required="">
                    <option value="">Seleccione...</option>
                    <option>Venezolano</option>
                    <option>Extranjero</option>
                    <option>Nacionalizado</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="trabajaotro1">Trabaja?</label>
                    <select class="custom-select d-block w-100" id="trabajaotro1" name="trabajaotro1" required="">
                    <option value="">Seleccione...</option>
                    <option>Si</option>
                    <option>No</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-8 col-md-8 mb-3">
                  <div class="form-group">
                    <label for="empresaotro1">Empresa Donde Trabaja</label>
                    <input type="text" class="form-control" id="empresaotro1" name="empresaotro1" placeholder="Empresa" required="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
              </div>
<!-- end row -->
<!-- inicio row -->
              <div class="row">
                <div class="col mb-3">
                  <div class="form-group">
                    <label for="direccionotro1">Dirección</label>
                    <textarea id="direccionotro1" name="direccionotro1" rows="2" class="form-control" placeholder="Dirección" required=""></textarea>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
              </div>
<!-- end row -->
          <button type="button" class="btn btn-primary btn-lg btn-block">DATOS DE LA PERSONA AUTORIZADA A RETIRAR AL NIÑO(A)</button>
          <br>
<!-- inicio row -->
              <div class="row">
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">                
                    <label for="trabajaotro1">Retira</label>
                    <select class="custom-select d-block w-100" id="trabajaotro1" name="trabajaotro1" required="">
                    <option value="">Seleccione...</option>
                    <option>Transporte Escolar</option>
                    <option>Particular</option>
                    </select>
                    <div class="invalid-feedback">
                      Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div> 
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="parentescootro1">Parentesco</label>
                    <input type="text" class="form-control" id="parentescootro1" name="parentescootro1" placeholder="Parentesco" required="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="nombreotro1">Nombres</label>
                    <input type="text" class="form-control" id="nombreotro1" name="nombreotro1" placeholder="Nombres" value="" required=""></span>
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div> 
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="apellidootro1">Apellidos</label>
                    <input type="text" class="form-control" id="apellidootro1" name=apellidootro1" placeholder="Apellidos" required="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="telefonocelularotro1">Teléfono Celular</label>
                    <input type="text" class="form-control" id="telefonocelularotro1" name="telefonocelularotro1" placeholder="Celular" required="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
                <div class="col-4 col-md-4 mb-3">
                  <div class="form-group">
                    <label for="ciotro1">Cedula de Identidad o Pasaporte</label>
                    <input type="text" class="form-control" id="ciotro1" name="ciotro1" placeholder="Cedula o Pasaporte" required="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
              </div>
<!-- end row -->
          <button type="button" class="btn btn-primary btn-lg btn-block">HISTORIAL CLINICO DEL ESTUDIANTE</button>
          <br>
<!-- inicio row -->
              <div class="row">
                <div class="col mb-3">
                  <div class="form-group">
                    <label for="empresaotro1">Enfermedades Padecidas</label>
                    <input type="text" class="form-control" id="empresaotro1" name="empresaotro1" placeholder="Separar con guion (-)" required="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
              </div>
<!-- end row -->
<!-- inicio row -->
              <div class="row">
                <div class="col mb-3">
                  <div class="form-group">
                    <label for="discapacidad">Alguna Discapacidad que requiera atención especial?</label>
                    <input type="text" class="form-control" id="discapacidad" name="discapacidad" placeholder="Separar con guion (-)" required="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
              </div>
<!-- end row -->
<!-- inicio row -->
              <div class="row">
                <div class="col mb-3">
                  <div class="form-group">
                    <label for="tratamiento">Recibe Tratamiento con Medicamento en Especial?</label>
                    <input type="text" class="form-control" id="tratamiento" name="tratamiento" placeholder="Nombre / Dosis / Horas y Separar con guion (-)" required="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
              </div>
<!-- end row -->
<!-- inicio row -->
              <div class="row">
                <div class="col mb-3">
                  <div class="form-group">
                    <label for="alergia">Alergico a?</label>
                    <input type="text" class="form-control" id="alergia" name="alergia" placeholder="Separar con guion (-)" required="">
                    <div class="invalid-feedback">
                    Por favor ingrese los datos correspondientes.
                    </div>
                  </div>
                </div>
              </div>
<!-- end row -->
          <button type="button" class="btn btn-primary btn-lg btn-block">DOCUMENTOS ENTREGADOS</button>
          <br>
<!-- inicio row -->
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
                  <label for="fotorepresentante">Foto del representante</label>
                  <select class="custom-select d-block w-100" id="fotorepresentante" name="fotorepresentante" required="">
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
            </div>
<!-- end row -->
            <hr class="mb-4">
            <div class="pull-right">
            <button class="btn btn-success btn-lg" type="submit" value="registrar"><i class="fa fa-save"></i> Guardar</button>
            </div>
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">"Lo que se les dé a los niños, los niños darán a la sociedad". Karl A. Menninger</p>
      </footer>
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