<?php
include_once '../config/config.php';

$query = $conexion->query("
    SELECT q.id_queja, q.queja, d.nom_depa, c.nom_ciudad
    FROM queja q
    INNER JOIN departamento d ON q.id_depa = d.id_depa
    INNER JOIN ciudad c ON q.id_ciu = c.id_ciu
");

$resultado = $query;
?>

<!DOCTYPE html>
<html lang="es">
<head>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="Sistema de registro y listado de quejas" />
  <meta name="author" content="Edward Romero" />

  <title>Listado de Quejas</title>

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../public/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../public/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../public/favicon_io/favicon-16x16.png">
  <link rel="manifest" href="../public/favicon_io/site.webmanifest">
  <link rel="shortcut icon" href="../public/favicon_io/favicon.ico" type="image/x-icon" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Custom styles -->
  <link rel="stylesheet" href="../public/style.css">
</head>

</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">SIRVEN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="form_quejas.php"><i class="bi bi-pencil-square"></i> Registrar Queja</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="lista_quejas.php"><i class="bi bi-list"></i> Ver Quejas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">
    <h3 class="text-center mb-4">Listado de Quejas</h3>

    <p class="text-end"><span class="badge bg-primary">Total de quejas: <?= $resultado->num_rows ?></span></p>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Queja</th>
                    <th>Ciudad</th>
                    <th>Departamento</th>
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
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">No hay quejas registradas</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="text-center mt-4">
        <a href="../index.php" class="btn btn-secondary"><i class="bi bi-arrow-left-circle"></i> Volver al inicio</a>
    </div>
</div>

<footer class="text-center mt-5 text-muted">
    &copy; <?= date("Y") ?> Edward Romero | Proyecto SIRVEN
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php if (isset($_GET['success'])): ?>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        Swal.fire({
            icon: "<?= $_GET['success'] == 1 ? 'success' : 'error' ?>",
            title: "<?= $_GET['success'] == 1 ? 'Queja registrada' : 'Error al registrar' ?>",
            text: "<?= $_GET['success'] == 1 ? 'La queja se ha guardado correctamente.' : 'Hubo un problema al guardar la queja.' ?>",
            confirmButtonText: "Aceptar"
        });
    });
</script>
<?php endif; ?>

</html>
