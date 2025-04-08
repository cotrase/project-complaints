<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Quejas</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilo personalizado -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 700px;
            margin-top: 40px;
        }
        .card {
            border-radius: 1rem;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card shadow-sm p-4">
        <h2 class="mb-4 text-center">Sistema de Registro de Quejas</h2>

        <!-- Alertas -->
        <?php if (isset($_GET['msg'])): ?>
            <?php
                $mensajes = [
                    'ciudad_ok' => ['Ciudad registrada correctamente.', 'success'],
                    'ciudad_error' => ['Error al registrar ciudad.', 'danger'],
                    'ciudad_invalida' => ['Completa todos los campos de ciudad.', 'warning'],
                    'depa_ok' => ['Departamento registrado correctamente.', 'success'],
                    'depa_error' => ['Error al registrar departamento.', 'danger'],
                    'depa_invalido' => ['Nombre de departamento vacío.', 'warning'],
                    'queja_ok' => ['Queja registrada correctamente.', 'success'],
                    'queja_error' => ['Error al registrar queja.', 'danger'],
                    'queja_invalida' => ['Campos de queja incompletos.', 'warning']
                ];
                [$texto, $tipo] = $mensajes[$_GET['msg']] ?? ['Acción realizada.', 'info'];
            ?>
            <div class="alert alert-<?= $tipo ?> alert-dismissible fade show" role="alert">
                <?= $texto ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>
        <?php endif; ?>

        <!-- Enlaces -->
        <ul class="list-group">
            <li class="list-group-item"><a href="views/form_depa.php">➕ Registrar Departamento</a></li>
            <li class="list-group-item"><a href="views/form_ciudad.php">➕ Registrar Ciudad</a></li>
            <li class="list-group-item"><a href="views/form_quejas.php">📝 Registrar Queja</a></li>
            <li class="list-group-item"><a href="views/lista_quejas.php">📄 Ver Quejas</a></li>
        </ul>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<footer class="text-center mt-5 text-muted">
    &copy; <?= date("Y") ?> Edward Romero - Todos los derechos reservados.
</footer>

</body>
</html>
