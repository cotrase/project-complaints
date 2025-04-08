<?php
include_once '../models/CityModel.php';
include_once '../config/config.php';

$nom_ciudad = $_POST['nom_ciudad'] ?? '';
$id_depa = $_POST['depa'] ?? '';

if (!empty($nom_ciudad) && !empty($id_depa)) {
    $ciudadModel = new CityModel($conexion);
    $registrado = $ciudadModel->registrarCiudad($nom_ciudad, $id_depa);

    header("Location: ../index.php?msg=" . ($registrado ? "ciudad_ok" : "ciudad_error"));
    exit();
} else {
    header("Location: ../index.php?msg=ciudad_invalida");
    exit();
}
