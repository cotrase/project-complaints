<?php include_once '../config/config.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Departamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/style.css" rel="stylesheet">
</head>
<body>

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
</div>

</body>
</html>
