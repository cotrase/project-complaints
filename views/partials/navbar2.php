<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="index.php">
      <i class="bi bi-clipboard-check"></i> Quejas App
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav ms-auto me-auto text-center"> <!-- centrado -->
        <li class="nav-item mx-2">
          <a class="nav-link" href="views/form_depa.php">
            <i class="bi bi-building-add"></i> Registrar Departamento
          </a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="views/form_ciudad.php">
            <i class="bi bi-geo-alt-fill"></i> Registrar Ciudad
          </a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="views/form_quejas.php">
            <i class="bi bi-pencil-square"></i> Registrar Queja
          </a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="views/lista_quejas.php">
            <i class="bi bi-card-list"></i> Ver Quejas
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
