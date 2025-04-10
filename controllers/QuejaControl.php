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
// Eliminar queja
if ($_GET['action'] == 'eliminar') {
    $id = $_GET['id'];
    $stmt = $conexion->prepare("DELETE FROM queja WHERE id_queja = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    header("Location: ../views/lista_quejas.php");
}

// Cambiar estado
if ($_GET['action'] == 'cambiar_estado') {
    $id = $_GET['id'];
    $estado = $_GET['estado'];
    $stmt = $conexion->prepare("UPDATE queja SET estado = ? WHERE id_queja = ?");
    $stmt->bind_param("si", $estado, $id);
    $stmt->execute();
    header("Location: ../views/lista_quejas.php");
}


?>
