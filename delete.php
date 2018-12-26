<?php


// conecta a la base de datos

$db = pg_connect("host=localhost port=5432 dbname=ceilapaz user=postgres password=root");

// verifica si la variable 'id' esta creada en la URL, y chequea que sea valida

if (isset($_GET['id']) && is_numeric($_GET['id']))

{

// obtiene el valor de id

$id = $_GET['id'];

// borra el registro

$result = pg_query($db, "DELETE FROM usuario WHERE idusuario=$id");

// redirecciona a la pagina view.php

header("Location: view.php");

}

else

// si la id no esta creada o no es valida, redirecciona a view.php

{

header("Location: view.php");

}

?>