<?php
class Depa {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function registrarDepartamento($nombre) {
        $stmt = $this->conexion->prepare("INSERT INTO departamento (nom_depa) VALUES (?)");
        $stmt->bind_param("s", $nombre);
        return $stmt->execute();
    }

    public function obtenerDepartamentos() {
        return $this->conexion->query("SELECT id_depa, nom_depa FROM departamento");
    }
}
?>
