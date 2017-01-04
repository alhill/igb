<?php include "header.php" ?>
	
	<div class="row">
		<div class="col-sm-12">
			<p>Regístrate en 5 minutos y accederás a todas las ventajas de ser socio de Incredible Green Box! Acceso completo a videos de conciertos y entrevistas especiales, descuentos exclusivos, ventajas para reservar tus entradas... y todo completamente gratis.</p><br>
		</div>
	
			<form action="enviar.php" method="POST" name="form1" id="form1">
				<div class="row">
					<div class="col-sm-3"></div><div class="col-sm-3"><label>Nombre de usuario</label></div><div class="col-sm-3"><input type="text" name="usuario" value="<?php if(isset($_POST['usuario'])){
                    echo $_POST['usuario']; } ?>"/></div><div class="col-sm-3"></div>	
				</div>
				<div class="row">
					<div class="col-sm-3"></div><div class="col-sm-3"><label>Contraseña</label></div><div class="col-sm-3"><input type="password" name="pw" value="<?php if(isset($_POST['pw'])){
                    echo $_POST['pw']; } ?>" /></div><div class="col-sm-3"></div>	
				</div>
				<div class="row">
					<div class="col-sm-3"></div><div class="col-sm-3"><label>Repetir contraseña</label></div><div class="col-sm-3"><input type="password" name="pw2" value="<?php if(isset($_POST['pw2'])){
                    echo $_POST['pw2']; } ?>" /></div><div class="col-sm-3"></div>	
				</div>
				<div class="row">
					<div class="col-sm-3"></div><div class="col-sm-3"><label>E-mail</label></div><div class="col-sm-3"><input type="text" name="email" value="<?php if(isset($_POST['email'])){
                    echo $_POST['email']; } ?>" /></div><div class="col-sm-3"></div>
				</div>
				<div class="row">
					<div class="col-sm-3"></div><div class="col-sm-3"><label>Repetir E-mail</label></div><div class="col-sm-3"><input type="text" name="email2" value="<?php if(isset($_POST['email2'])){
                    echo $_POST['email2']; } ?>" /></div><div class="col-sm-3"></div>
				</div>
				<div class="row">
					<div class="col-sm-3"></div><div class="col-sm-3"><label>Nombre</label></div><div class="col-sm-3"><input type="text" name="nombre" value="<?php if(isset($_POST['nombre'])){
                    echo $_POST['nombre']; } ?>" /></div><div class="col-sm-3"></div>
				</div>
				<div class="row">
					<div class="col-sm-3"></div><div class="col-sm-3"><label>Apellidos</label></div><div class="col-sm-3"><input type="text" name="apellidos" value="<?php if(isset($_POST['apellidos'])){
                    echo $_POST['apellidos']; } ?>" /></div><div class="col-sm-3"></div>
				</div>
				<div class="row">
					<div class="col-sm-3"></div><div class="col-sm-3"><label>Fecha de nacimiento</label></div><div class="col-sm-3"><input type="text" id="calendario" name="fechanac" value="<?php if(isset($_POST['fechanac'])){
                    echo $_POST['fechanac']; } ?>" /></div><div class="col-sm-3"></div>
				</div>
				<div class="row">
					<div class="col-sm-3"></div><div class="col-sm-9"><br><p>¿Aceptas las <a href="politicacookies.php">condiciones de uso</a> de Incredible Green Box?&nbsp;<input type="checkbox" name="cond" value="acepta"/></p><br></div>
				</div>
				
				<div class="row">
					<div class="col-sm-3"></div><div class="col-sm-9">
						<button type="reset">Borrar</button>
						<button type="button" onclick="ValidarFormulario()">Completar registro</button>
					</div>
				</div>
			</form>
	</div>
	

<?php include "footer.php" ?>