<?php
include_once '../config/config.php';

$query = $conexion->query("
    SELECT q.id_queja, q.queja, q.estado, d.nom_depa, c.nom_ciudad
    FROM queja q
    INNER JOIN departamento d ON q.id_depa = d.id_depa
    INNER JOIN ciudad c ON q.id_ciu = c.id_ciu
");

$resultado = $query;
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Listado de Quejas</title>

  <!-- Favicon + Estilos -->
  <link rel="icon" type="image/png" sizes="32x32" href="../public/favicon_io/favicon-32x32.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../public/style.css">

  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

<?php include_once(__DIR__ . '/partials/navbar.php'); ?>


<div class="container mt-5">
    <h3 class="text-center mb-4">📄 Listado de Quejas</h3>

    <p class="text-end"><span class="badge bg-primary">Total de quejas: <?= $resultado->num_rows ?></span></p>

    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Queja</th>
                    <th>Ciudad</th>
                    <th>Departamento</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($resultado->num_rows > 0): ?>
                    <?php while ($row = $resultado->fetch_assoc()): ?>
                        <tr>
                            <td><?= $row['id_queja'] ?></td>
                            <td><?= $row['queja'] ?></td>
                            <td><?= $row['nom_ciudad'] ?></td>
                            <td><?= $row['nom_depa'] ?></td>
                            <td>
                                <span class="badge bg-secondary"><?= ucfirst($row['estado']) ?></span>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-warning" onclick="cambiarEstado(<?= $row['id_queja'] ?>)">Cambiar Estado</button>
                                <button class="btn btn-sm btn-danger" onclick="confirmarEliminacion(<?= $row['id_queja'] ?>)">Eliminar</button>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="6">No hay quejas registradas.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="text-center mt-4">
        <a href="../index.php" class="btn btn-secondary">⬅️ Volver al inicio</a>
    </div>
</div>

<footer class="text-center mt-5 text-muted">
    &copy; <?= date("Y") ?> Edward Romero | TODOS LOS DERECHOS RESERVADOS
</footer>

<script>
function confirmarEliminacion(id) {
    Swal.fire({
        title: '¿Eliminar esta queja?',
        text: "No podrás recuperarla luego.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar',
        confirmButtonColor: '#d33'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = `../controllers/QuejaControl.php?action=eliminar&id=${id}`;
        }
    });
}

function cambiarEstado(id) {
    Swal.fire({
        title: 'Cambiar estado',
        input: 'select',
        inputOptions: {
            'pendiente': 'Pendiente',
            'proceso': 'En Proceso',
            'resuelta': 'Resuelta'
        },
        inputPlaceholder: 'Selecciona nuevo estado',
        showCancelButton: true,
        confirmButtonText: 'Actualizar',
        inputValidator: (value) => {
            if (!value) {
                return 'Debes seleccionar un estado';
            }
        }
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = `../controllers/QuejaControl.php?action=cambiar_estado&id=${id}&estado=${result.value}`;
        }
    });
}
</script>
<!-- JQuery y Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>



<!-- Script AJAX para cargar ciudades -->
<!-- Script AJAX -->
<script src="../public/script.js"></script>
</body>
</html>
