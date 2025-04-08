<?php

class Queja {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    // Método para registrar una queja
    public function registrarQueja($queja, $id_depa, $id_ciu) {
        // Validar que no estén vacíos
        if (empty($queja) || empty($id_depa) || empty($id_ciu)) {
            return false;
        }

        $stmt = $this->conexion->prepare("INSERT INTO queja (queja, id_depa, id_ciu) VALUES (?, ?, ?)");
        if (!$stmt) {
            die("Error en la preparación: " . $this->conexion->error);
        }

        $stmt->bind_param("sii", $queja, $id_depa, $id_ciu);
        $resultado = $stmt->execute();

        $stmt->close();
        return $resultado;
    }

    // (Opcional) Obtener todas las quejas
    public function obtenerQuejas() {
        $query = "
            SELECT q.id_queja, q.queja, d.nom_depa, c.nom_ciudad
            FROM queja q
            JOIN departamento d ON q.id_depa = d.id_depa
            JOIN ciudad c ON q.id_ciu = c.id_ciu
            ORDER BY q.id_queja DESC
        ";

        $resultado = $this->conexion->query($query);
        return $resultado;
    }

    // (Opcional) Eliminar una queja
    public function eliminarQueja($id_queja) {
        $stmt = $this->conexion->prepare("DELETE FROM queja WHERE id_queja = ?");
        $stmt->bind_param("i", $id_queja);
        $resultado = $stmt->execute();
        $stmt->close();
        return $resultado;
    }
}
