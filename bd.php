<?php 
$servidor="localhost"; // referencia al puerto o ip 127.0.0.1
$bd="konecta_app";
$usuario="root";
$contraseña="";

try{
    $conexion= new PDO("mysql:host=$servidor;dbname=$bd", $usuario, $contraseña);
}catch(Exception $ex){
    echo $ex ->getMessage();

}

?>