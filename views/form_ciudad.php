<?php
include_once '../config/config.php';
$departamentos = $conexion->query("SELECT id_depa, nom_depa FROM departamento");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Ciudad</title>
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
        <h3 class="text-center mb-4">Registrar Ciudad</h3>

        <form action="../controllers/CityControl.php" method="POST">
            <div class="mb-3">
                <label for="nom_ciudad" class="form-label">Nombre de la ciudad</label>
                <input type="text" class="form-control" id="nom_ciudad" name="nom_ciudad" required>
            </div>

            <div class="mb-3">
                <label for="depa" class="form-label">Departamento</label>
                <select class="form-select" name="depa" id="depa" required>
                    <option value="">Seleccione un departamento</option>
                    <?php while ($row = $departamentos->fetch_assoc()) { ?>
                        <option value="<?= $row['id_depa'] ?>"><?= $row['nom_depa'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Guardar Ciudad</button>
            </div>
        </form>

        <div class="mt-3 text-center">
            <a href="../index.php" class="btn btn-outline-secondary btn-sm">⬅️ Volver al inicio</a>
        </div>
    </div>
</div>
<!-- JQuery y Bootstrap JS -->
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
