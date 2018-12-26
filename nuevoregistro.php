<?php
 
session_start();
if(empty($_SESSION)) {
	header("Location: index.php"); 	
}

#Salir si alguno de los datos no está presente
#Si todo va bien, se ejecuta esta parte del código...

include_once "conexion.php";
$nombreusuario = $_POST["nombreusuario"];
$cedula = $_POST["cedula"];
$cargo = $_POST["cargo"];
$tipousuario = $_POST["tipousuario"];
$username = $_POST["username"];
$password = $_POST["password"];


$sentencia = $conexion->prepare("INSERT INTO usuario(nombreusuario, cedulausuario, cargo, tipousuario, username, password) VALUES (?, ?, ?, ?, ?, ?)");
$resultado = $sentencia->execute([$nombreusuario, $cedula, $cargo, $tipousuario, $username, $password]);

if($resultado == TRUE){
	
	header("Location: inicio.php");
	pg_close($db);
	exit;	
} else 
{
	echo "Algo salió mal. Por favor verifica que la tabla exista";
}

pg_close($db);	


?>
