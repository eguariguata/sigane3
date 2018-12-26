 <?php
  include_once('conexion.php');
	$mensajeOk=false;
	$mensajeError='El sistema no se encuentra disponible';
	if(isset($_POST['username'],$_POST['password'])):
		if($_POST['username']!=""):
			if($_POST['password']!=""):
				$username=$_POST['username'];
				$password=$_POST['password'];
				$consulta=pg_query($conexion,("Select * from usuario where username='$username' and password='$password'"));
				if(pg_num_rows($consulta)>0):
					$mensajeOk=true;
					$Usua=pg_fetch_array($consulta);
					session_start();
					$_SESSION['idusuario']=$Usua[0];
					$_SESSION['username']=$Usua[3];
					$_SESSION['tipousuario']=$Usua[5];
					$mensajeError='Logueado correctamente.';
				else:
					$mensajeError='Usuario o contraseña incorrecta.';
				endif;
			else:
				$mensajeError='Contraseña incorrecta.';
			endif;
		else:
			$mensajeError='Usuario no existe.';
		endif;
	else:
		$mensajeError='Todos los datos son requeridos.';
	endif;
	$salidaJson=array('respuesta' => $mensajeOk, 'mensaje' =>$mensajeError);
	echo json_encode($salidaJson);

?>