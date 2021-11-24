<?php

$servidor="localhost";
$usuario="root";
$contraseña="";
$BD="replica";

$conexion=mysqli_connect($servidor, $usuario, $contraseña, $BD);

if (!$conexion) {
	echo "Falló la conexion <br>";
	dile("conexion failed") . mysqli_connect_error();
	}
	else{
		echo "Conexion Exitosa
		";
	}

?>