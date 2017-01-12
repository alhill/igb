<?php include "header.php" ?>

<script>
    function modalBorr(user)
    {   
                $("#nombredeusuario").html(user);
                $("#borrar").modal();
                $("#aceptaborrar").click(function(){
                    location.href='scrborrar.php?'+user; 
                });
                
    }   

    $(document).ready(function(){
        $.get("listar.php",function(data){
                $(".lista").html(data)
            });
        $(".lista").slideDown();
        
            $("#botonalta").click(function(){   
            $(".lista").hide();
            $(".modif").hide();
            $(".borrar").hide();
            $(".alta").slideDown();
        });
            $("#botonlista").click(function(){
            $(".alta").hide();
            $(".modif").hide();
            $(".borrar").hide();
            $.get("listar.php",function(data){
                $(".lista").html(data)
            });
            $(".lista").slideDown();
        });
        $("#botonmodif").click(function(){
            $(".lista").hide();
            $(".alta").hide();
            $(".borrar").hide();
            $.get("modif.php",function(data){
                $(".modif").html(data)
            });
            $(".modif").slideDown();
        });
        $("#botonborrar").click(function(){
            $(".lista").hide();
            $(".modif").hide();
            $(".alta").hide();
            $.get("borrar.php",function(data){
                $(".borrar").html(data)
            });
            $(".borrar").slideDown();
        });
    });
    
    

    
</script>

    <div id="borrar" class="modal fade" role="dialog">
        <div class="loginaso">
            <p>¿Está seguro de que desea borrar el usuario <span id="nombredeusuario"></span>?</p>
                <button type="button" id="aceptaborrar">Aceptar</button>
                <button type="button" onclick="alert("");">Cancelar</button>
        </div>
    </div>

	<div class="row">
        <div class="col-sm-12"><h2>PANEL DE CONTROL DE ADMINISTRADOR</h2></div>
        <div class="col-sm-12">
            <ul>
                <li><button id="botonalta" class="boton bloque"><p>Crear nuevo usuario</p></button></li>
                <li><button id="botonlista" class="boton bloque"><p>Mostrar listado de usuarios</p></button></li>
                <li><button id="botonmodif" class="boton bloque"><p>Modificar usuarios</p></button></li>
                <li><button id="botonborrar" class="boton bloque"><p>Borrar usuarios</p></button></li>
            </ul>
        </div>
    </div>
        <div><p id="mensaje"></p></div>
        <div class="alta acordeon">
            <form action="enviar.php" method="POST" name="form1" id="form1">
                <div class="row">
                    <div class="col-sm-3"></div><div class="col-sm-6"><h2>ALTA DE NUEVO USUARIO</h2></div><div class="col-sm-3"></div>	
				</div>
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
					<div class="col-sm-3"></div><div class="col-sm-9">
						<button type="reset">Borrar</button>
						<button type="button" onclick="ValidarFormulario()">Completar registro</button>
					</div>
				</div>
            </form>
        
        </div>
        <div class="lista acordeon"></div>
        <div class="modif acordeon"></div>
        <div class="borrar acordeon"></div>
            

	

<?php include "footer.php" ?>