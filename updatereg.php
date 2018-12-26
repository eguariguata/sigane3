<?php


// Con esta línea mostramos los posibles errores:
	ini_set("display_errors", "on");

session_start();
if(empty($_SESSION)) {
	header("Location: index.php"); 	
}


$db = pg_connect("host=localhost port=5432 dbname=ceilapaz user=postgres password=root");

$result = pg_query($db, "UPDATE usuario SET nombreusuario = '$_POST[nombreusuario_updated]', cedulausuario = '$_POST[cedula_updated]', cargo = '$_POST[cargo_updated]', tipousuario = '$_POST[tipousuario_updated]', username = '$_POST[username_updated]', password = '$_POST[password_updated]' WHERE idusuario = '$_POST[idusuario_updated]'");
if($result == TRUE){
	
	header("Location: view.php");
	pg_close($db);
	exit;	
} else 
{
	echo "Algo salió mal. Por favor verifica que la tabla exista";
}

pg_close($db);	
?>
