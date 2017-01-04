<?php

    include "conexion.php";
    $usuario = $_POST ['usuario'];
    mysqli_query($conexion, "DELETE FROM igb_users WHERE usuario='$usuario'");

    }

?>