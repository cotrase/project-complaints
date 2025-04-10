<?php include_once '../config/config.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Departamento</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../public/favicon_io/favicon-32x32.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../public/style.css">
    
</head>
<body>

<!-- Navbar -->
<?php include_once(__DIR__ . '/partials/navbar.php'); ?>

<!-- Fin Navbar -->
<!-- Contenido principal -->

<div class="container">
    <div class="card shadow">
        <h3 class="text-center mb-4">Registrar Departamento</h3>

        <form action="../controllers/DepaControl.php" method="POST">
            <div class="mb-3">
                <label for="txtNombre" class="form-label">Nombre del departamento</label>
                <input type="text" class="form-control" id="txtNombre" name="txtNombre" required>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>

        <div class="mt-3 text-center">
            <a href="../index.php" class="btn btn-outline-secondary btn-sm">⬅️ Volver al inicio</a>
        </div>
    </div>
</div><!-- JQuery y Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>



<!-- Script AJAX para cargar ciudades -->
<!-- Script AJAX -->
<script src="../public/script.js"></script>
<footer class="text-center mt-5 text-muted">
    &copy; <?= date("Y") ?> Edward Romero | TODOS LOS DERECHOS RESERVADOS
</footer>
</body>
</html>
