<?php 
$host="localhost";
$bd="comercial";
$usuario="root";
$contraseña="";

try {
    $conexion= new PDO("mysql:host=$host; dbname=$bd", $usuario, $contraseña);
    // if ($conexion) {echo "Conectado... a xampp";}

} catch (Exception $ex) {
    echo $ex -> getMessage();
}

?>