<?php

    include "conexion.php";
    $url = $_SERVER['REQUEST_URI'];
    $user = parse_url($url, PHP_URL_QUERY);
    mysqli_query($conexion, "DELETE FROM igb_users WHERE usuario='$user'") or die('Hubo un problema al borrar el usuario: ' . mysqli_error());
    header("Location: igbadmin.php");

?>