<?php

    include "conexion.php";

    $resultado = mysqli_query($conexion, "SELECT * FROM igb_users");
    
    echo ("<table class='usuarios'><th><b>Usuario</b></th><th><b>Contraseña</b></th><th><b>Email</b></th><th><b>Nombre</b></th><th><b>Apellidos</b></th><th><b>Fecha de nacimiento</b></th><th class='eldelboton'></th>");
    while($arrayusuarios = $resultado -> fetch_assoc()){
        $usuario = $arrayusuarios["usuario"];
        echo ("<tr><td>".$arrayusuarios["usuario"]."</td>
        <td>".$arrayusuarios["pw"]."</td>
        <td>".$arrayusuarios["email"]."</td>
        <td>".$arrayusuarios["nombre"]."</td>
        <td>".$arrayusuarios["apellidos"]."</td>
        <td>".$arrayusuarios["fechanac"]."</td>
        <td class='eldelboton'><button onclick='location.href=&#34;modifusuario.php?".$usuario."&#34;;'>Modificar</button></td></tr>");
    }
    echo ("</table>");
        
?>