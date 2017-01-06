<?php 
    include "conexion.php"; 
    $url = $_SERVER['HTTP_REFERER'];
    $usuario = parse_url($url, PHP_URL_QUERY);
?>

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
        if($_POST['pw'] == '' or strlen($_POST['pw'])<6){
            $errors[] = '<p>Contrase&ntilde;a demasiado corta o incorrecta</p>';
            $flag = false;
        }
        if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email'])){
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
        return $flag;
    }

    $errors=[];

    $pw = $_POST ['pw'];
    $email = $_POST ['email'];
    $nombre = $_POST ['nombre'];
    $apellidos = $_POST ['apellidos'];
    $fechanac = $_POST ['fechanac'];
 
    $todobien = ValidacionRegistro($errors);
    
    if($todobien){       
        mysqli_query($conexion, "UPDATE igb_users SET pw='$pw', email='$email', nombre='$nombre', apellidos='$apellidos', fechanac='$fechanac' WHERE usuario='$usuario'") or die("Error en la modificación de datos");
        header("Location: igbadmin.php");
        echo "Modificación realizada correctamente";
    }

    $todobien = ValidacionRegistro($errors);

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
</body>
</html>
