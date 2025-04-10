<?php
// views/layout.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($titulo) ? $titulo : 'Sistema de Quejas' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../public/favicon-32x32.png">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <?php include_once __DIR__ . '/partials/navbar.php'; ?>

    <main class="container mt-4">
        <?php include_once __DIR__ . "/$vista"; ?>
    </main>

</body>
</html>
