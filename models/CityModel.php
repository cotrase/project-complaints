<?php
class CityModel {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function registrarCiudad($nom_ciudad, $id_depa) {
        $stmt = $this->conexion->prepare("INSERT INTO ciudad (nom_ciudad, id_depa) VALUES (?, ?)");
        $stmt->bind_param("si", $nom_ciudad, $id_depa);
        return $stmt->execute();
    }
}
?>
