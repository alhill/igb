<!DOCTYPE html>

<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png"><link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png"><link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png"><link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png"><link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png"><link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png"><link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png"><link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png"><link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png"><link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png"><link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png"><link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png"><link rel="icon" type="image/png sizes="16x16" href="/favicon-16x16.png"><link rel="manifest" href="/manifest.json"><meta name="msapplication-TileColor" content="#ffffff"><meta name="msapplication-TileImage" content="/ms-icon-144x144.png"><meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="css/reset.css" type="text/css" />	
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Antic|Averia+Libre:700" rel="stylesheet"> 
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="js/matchHeight.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<title>Incredible Green Box</title>
</head>

<body>
<div id="loginmodal" class="modal fade" role="dialog">
	<div class="loginaso">
		<p><b>Acceso a la zona de usuarios</b></p>
		<form action="#">
			<table>
				<tr>
					<td><p class="textoform">Usuario:</td> 
					<td><input type="text" name="usuario" required /></td>
				</tr>
				<tr>
					<td><p class="textoform">Contraseña:&nbsp;&nbsp;</td>
					<td><input type="password" name="pw" required /></td>
				</tr>
			</table><br>
			<button type="submit">Enviar</button>
		</form>
		<br>
		<a class="lanzamodal2">Olvidaste la contraseña?</a><br>
		<a href="registro.php">Todavía no estás registrado?</a>
	</div>
</div>

<div id="olvidomodal" class="modal fade" role="dialog">
	<div class="loginaso">
		<p>Introduce tu cuenta de correo electrónico para recuperar la contraseña:</p>
		<form action="#" method="POST" name="olvido" id="olvido">
			<input type="text" name="emailrec" required /><br>
			<button type="button" onclick="Correito()">Enviar</button>
		</form>
	</div>
</div>

<div id="yaesta" class="modal fade" role="dialog">
	<div class="loginaso">
		<p>¡Ya está! En menos de 5 minutos recibirás un correo electrónico con instrucciones para restaurar tu contraseña</p><br>
		<button type="submit" class="cierramodal">Aceptar</button>
	</div>
</div>
<nav>
	<div class="row">
		<div class="col-md-2 col-sm-4 col-xs-6 elemnav"><a href="index.php"><span class="mierditoculto">»</span> Noticias</a></div>
		<div class="col-md-2 col-sm-4 col-xs-6 elemnav"><a href="programacion.php"><span class="mierditoculto">»</span> Agenda</a></div>
		<div class="col-md-2 col-sm-4 col-xs-6 elemnav"><a href="galeria.php"><span class="mierditoculto">»</span> Galería</a></div>
		<div class="col-md-2 col-sm-4 col-xs-6 elemnav"><a href="multimedia.php"><span class="mierditoculto">»</span> Vídeos</a></div>
		<div class="col-md-2 col-sm-4 col-xs-6 elemnav"><a href="nosotros.php"><span class="mierditoculto">»</span> Nosotros</a></div>
		<div class="col-md-2 col-sm-4 col-xs-6 elemnav socios"><a class="lanzamodal"><span class="mierditoculto">»</span> Usuarios</a></div>
	</div>
</nav>
<div id="container" class="container">
	<header>
			<div class="row">
				<div class="col-sm-4 col-xs-9">
						<a href="index.html"><img id="logo" src="img/logo.png" /></a>
				</div>
				<div class="hidden-sm hidden-md hidden-lg hidden-xl"></div>
				<div class="col-sm-3 hidden-xs"></div>
				<div class="col-sm-3 hidden-xs elemnav social"><a href="https://www.facebook.com/"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a><a href="https://www.instagram.com/"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a><a href="https://twitter.com/?lang=es"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></div>
			</div>
		</header>		
	<div class="row">
		<div class="col-sm-12"></div>
	</div>
	
	<div class="row">
		<footer>
			<div class="col-sm-3">&reg; 2016 - incredible green box</div>
			<div class="col-sm-3"><a href="contacto.php">Contacto</a></div>
			<div class="col-sm-3"><a href="#">Rider</a></div>
			<div class="col-sm-3"><a href="politicacookies.php">Condiciones de uso</a></div>
		</footer>
	</div>

</div>
</body>

</html>