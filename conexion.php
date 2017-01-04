<?php

	$host = "localhost";  //conexion al hosting
	$db = "igb";  //nombre de la base de datos
	$user = "igb4dmin"; //nombre de usuario
	$pass = "qwertyuiop";  //clave de usuario

	$conexion = mysqli_connect($host, $user, $pass) or die('No se pudo conectar con la base de datos: ' . mysqli_error());

	mysqli_select_db($conexion, $db) or die('No se pudo seleccionar la base de datos');
?>