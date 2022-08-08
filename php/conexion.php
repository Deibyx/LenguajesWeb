
<?php

function conexion()
{
	$servidor = "192.168.100.67";
	$usuario = "DEIBY";
	$password = "Deiby";
	$bd = "XE";



	$conexion = mysqli_connect($servidor, $usuario, $password, $bd);

	return $conexion;
}

//Prueba para mirar que la base de datos conecte

if (conexion()) {
	echo "conectado";
} else {
	echo "no conectado";
}

?>