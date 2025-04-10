<?php
$host = "localhost";
$user = "root"; // cambia si tienes otro usuario
$password = ""; // cambia si tienes contraseña
$dbname = "quejas_db";


define('BASE_URL', '/Dev/UNIVERSIDAD/SIRVEN/project-complaints/');
$conexion = new mysqli("localhost", "root", "", "quejas_db");


if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
