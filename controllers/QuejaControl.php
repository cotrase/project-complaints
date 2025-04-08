<?php
include_once '../config/config.php';
include_once '../models/Queja.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $queja = $_POST['queja'];
    $idDepa = $_POST['depa'];
    $idCiu = $_POST['ciu'];

    $modelo = new Queja($conexion);
    $exito = $modelo->registrarQueja($queja, $idDepa, $idCiu);

    header("Location: ../views/lista_quejas.php?success=" . ($exito ? "1" : "0"));
    exit;
}
?>
