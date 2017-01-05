<?php 
    include "header.php";
    $url = $_SERVER['REQUEST_URI'];
    $user = parse_url($url, PHP_URL_QUERY);
    $resultado = mysqli_query($conexion, "SELECT * FROM igb_users WHERE usuario='$user'");
    $row = mysqli_fetch_assoc($resultado);
?>
	
	<div class="row">
		<form action="modificar.php" method="POST" name="form1" id="form1">
                <div class="row">
                    <div class="col-sm-3"></div><div class="col-sm-6"><h2>MODIFICACIÓN DE USUARIO</h2></div><div class="col-sm-3"></div>	
				</div>
				<div class="row">
					<div class="col-sm-3"></div><div class="col-sm-3"><label>Nombre de usuario</label></div><div class="col-sm-3"><?php echo($row["usuario"]); ?></div><div class="col-sm-3"></div>	
				</div>
				<div class="row">
					<div class="col-sm-3"></div><div class="col-sm-3"><label>Contraseña</label></div><div class="col-sm-3"><input type="text" name="pw" value="<?php echo($row["pw"]); ?>" /></div><div class="col-sm-3"></div>	
				</div>
				<div class="row">
				</div>
				<div class="row">
					<div class="col-sm-3"></div><div class="col-sm-3"><label>E-mail</label></div><div class="col-sm-3"><input type="text" name="email" value="<?php echo($row["email"]); ?>" /></div><div class="col-sm-3"></div>
				</div>
				<div class="row">
					<div class="col-sm-3"></div><div class="col-sm-3"><label>Nombre</label></div><div class="col-sm-3"><input type="text" name="nombre" value="<?php echo($row["nombre"]); ?>" /></div><div class="col-sm-3"></div>
				</div>
				<div class="row">
					<div class="col-sm-3"></div><div class="col-sm-3"><label>Apellidos</label></div><div class="col-sm-3"><input type="text" name="apellidos" value="<?php echo($row["apellidos"]); ?>" /></div><div class="col-sm-3"></div>
				</div>
				<div class="row">
					<div class="col-sm-3"></div><div class="col-sm-3"><label>Fecha de nacimiento</label></div><div class="col-sm-3"><input type="text" id="calendario" name="fechanac" value="<?php echo($row["fechanac"]); ?>" /></div><div class="col-sm-3"></div>
				</div>
                <div class="row">
					<div class="col-sm-3"></div><div class="col-sm-9">
						<button type="reset">Restaurar</button>
						<button type="button" onclick="ValidarFormulario()" >Modificar registro</button>
					</div>
				</div>
            </form>
	</div>
	

<?php include "footer.php" ?>

onclick="location.href='modificar.php?<?php echo $user ?>'"