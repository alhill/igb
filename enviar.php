<?php include "conexion.php" ?>

<!DOCTYPE html>

<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png"><link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png"><link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png"><link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png"><link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png"><link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png"><link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png"><link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png"><link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png"><link rel="icon" type="image/png" sizes="192x192"  href="android-icon-192x192.png"><link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png"><link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png"><link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png"><link rel="manifest" href="manifest.json"><meta name="msapplication-TileColor" content="#ffffff"><meta name="msapplication-TileImage" content="/ms-icon-144x144.png"><meta name="theme-color" content="#ffffff">
<!--	<meta HTTP-EQUIV="REFRESH" content="0, url=index.php"> -->
	<title>Redirigiendo... </title>
</head>

<body>

<?php

function ValidacionRegistro(&$errors){
    $pagina = basename($_SERVER['HTTP_REFERER']);
	$flag = true;
	if($_POST['usuario'] == '' or strlen($_POST['usuario'])<6){
		$errors[] = "<p>Nombre de usuario vac&iacute;o o demasiado corto</p>";
		$flag = false;
	}
	if($_POST['pw'] == '' or $_POST['pw']!=$_POST['pw2'] or strlen($_POST['pw'])<6){
		$errors[] = '<p>Contrase&ntilde;a demasiado corta o incorrecta</p>';
		$flag = false;
	}
	if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email']) or $_POST['email']!=$_POST['email2']){
		$errors[] = '<p>Email vac&iacute;o o incorrecto</p>';
		$flag = false;
	}
	if($_POST['nombre'] == ''){
		$errors[] = '<p>Campo nombre vac&iacute;o</p>';
		$flag = false;
	}
	if($_POST['apellidos'] == ''){
		$errors[] = '<p>Campo apellidos vac&iacute;o</p>';
		$flag = false;
	}
	if($_POST['fechanac'] == '' or (strtotime($_POST['fechanac']) > date(strtotime("-16 year"))+0)){
		$errors[] = '<p>Campo fecha de nacimiento vac&iacute;o o edad menor de 16</p>';
		$flag = false;
	}   
	if(empty($_POST['cond']) && $pagina != "igbadmin.php"){
		$errors[] = '<p>No acepta las condiciones de uso</p>';
		$flag = false;
	}
	
	return $flag;
}

$errors=[];
$todobien = ValidacionRegistro($errors);

if ($todobien)
{
    $usuario = $_POST ['usuario'];
    $pw = $_POST ['pw'];
    $email = $_POST ['email'];
    $nombre = $_POST ['nombre'];
    $apellidos = $_POST ['apellidos'];
    $fechanac = $_POST ['fechanac'];
    
    
    $resultado = mysqli_query($conexion, "SELECT * FROM igb_users WHERE usuario='$usuario'");
    printf("La selección devolvió %d filas.\n", mysqli_num_rows($resultado));
    if (mysqli_num_rows($resultado)==0)
    {
        printf("Creando nuevo usuario...\n");
        mysqli_query($conexion, "INSERT INTO igb_users (usuario,pw,email,nombre,apellidos,fechanac)
VALUES ('$usuario', '$pw', '$email', '$nombre', '$apellidos', '$fechanac');");
    }
    else
    {
        printf("El usuario ya existe.\n");
    }
}

//DESCOMENTAR PARA DEBUG
/*if ($todobien == true)
{
	echo ("<p>Todos los datos son v&aacute;lidos, registro completado correctamente</p>");
}
else 
{
	echo ("<p>El registro fall&oacute;:</p><ul>");
	foreach ($errors as $error){echo("<li>" . $error . "</li>");}
	echo ("</ul>");
}*/

?>
