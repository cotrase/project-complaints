<?php
include_once '../config/config.php';

if (isset($_POST['id_depa'])) {
    $id_depa = $_POST['id_depa'];

    $stmt = $conexion->prepare("SELECT id_ciu, nom_ciudad FROM ciudad WHERE id_depa = ?");
    $stmt->bind_param("i", $id_depa);
    $stmt->execute();
    $result = $stmt->get_result();

    echo '<option value="">Seleccione ciudad</option>';
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row['id_ciu'] . '">' . $row['nom_ciudad'] . '</option>';
    }

    $stmt->close();
    $conexion->close();
}
?>
