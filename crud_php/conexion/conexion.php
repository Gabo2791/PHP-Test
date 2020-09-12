<?php

	//echo 'Ejecutar la funcion de conectar a base de datos.<br>';
	$servidor="localhost";
	$usuario="root";
	$contraseña="";
	$bd="escuela";

	$conexion=mysqli_connect($servidor, $usuario, $contraseña, $bd);

	if ($conexion) {
		//echo "Conexion Exitosa...";
		//mysqli_close($conexion);
	}else{
		echo "Error de conexion...";
	}




	

?>