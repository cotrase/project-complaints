<?php
include_once '../models/Depa.php';
include_once '../config/config.php';

$nombre = $_POST['txtNombre'] ?? '';

if (!empty($nombre)) {
    $depaModel = new Depa($conexion);
    $registrado = $depaModel->registrarDepartamento($nombre);

    header("Location: ../index.php?msg=" . ($registrado ? "depa_ok" : "depa_error"));
    exit();
} else {
    header("Location: ../index.php?msg=depa_invalido");
    exit();
}
