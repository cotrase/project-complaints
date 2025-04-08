<?php
$host = "";
$user = ""; // cambia si tienes otro usuario
$password = ""; // cambia si tienes contraseña
$dbname = "";

$conexion = new mysqli($host, $user, $password, $dbname);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
