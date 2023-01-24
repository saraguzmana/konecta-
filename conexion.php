<?php
function conectar()
{
    $comentarios = "root";
    $contraseña = "";
    $server = "localhost";
    $db = "konecta_app";
    $con = mysqli_connect($server, $comentarios, $contraseña, $db);

    if (!$con) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    return $con;
}
?>