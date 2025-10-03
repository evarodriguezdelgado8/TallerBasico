<?php $usuario = "admin"; ?>

<?php
$oProducto = ["nombre" => "HP I7 Notebook", "precio" => 400, "stock" => 5, "descripcion" => "Un super ordenador", "link" => "data:image/jpeg;base64,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"];
var_dump($oProducto);




?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mi Página con Bootstrap</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MiSitio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Menú">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Acerca</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Servicios</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Contenedor principal -->
  <div class="container mt-5">

    <?php if ($usuario == "admin"): ?>
        <h1>Bienvenido, administrador.</h1>
    <?php else: ?>
        <p>Bienvenido, usuario.</p>
    <?php endif; ?>
    
    <p class="text-center">Esta es una estructura básica para empezar a trabajar con Bootstrap.</p>

    <!-- Ejemplo de grilla -->
    <div class="row mt-4">
      <div class="col-md-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Columna 1</h5>
            <p class="card-text">Contenido de ejemplo.</p>
          </div>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Columna 2</h5>
            <p class="card-text">Contenido de ejemplo.</p>
          </div>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Columna 3</h5>
            <p class="card-text">Contenido de ejemplo.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center p-3 mt-5">
    <p>&copy; 2025 MiSitio. Todos los derechos reservados.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
