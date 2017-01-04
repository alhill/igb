<?php
	define("HOST", "localhost");
	define("USER", "igb4dmin");
	define("PW", "maieskiuel");
	define("BD", "igb");
	define("TBL", "igb_users");

	$conexion = new mysqli(HOST, USER, PW, BD);
	
	if ($conexion->connect_errno) 
	{
		echo ("Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error);
		$conectado = false;
	}
	else
	{
		echo ("Conectó!");
		$conectado = true;
	}
	
	$login = $_REQUEST["usuario"];
	$pw = $_REQUEST["pw"];
	$email = $_REQUEST["email"];
	$nombre = $_REQUEST["nombre"];
	$apellidos = $_REQUEST["apellidos"];
	$fechanac = $_REQUEST["fechanac"];
	
	
?>