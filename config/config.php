<?php
// Configuración de la base de datos
$db_config = [
    'host' => '',
    'user' => '',
    'password' => '',
    'dbname' => '',
];



// Crear conexión
$conexion = new mysqli(
    $db_config['host'],
    $db_config['user'],
    $db_config['password'],
    $db_config['dbname']
);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
