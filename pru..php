<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taller Reyes</title>
  <link rel="stylesheet" href="El.CSS">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #092e72;
      font-family: Arial, sans-serif;
      color: #ffffff;
    }
    h1 {
      color: #ffffff;
      font-weight: 600;
      font-size: 4rem;
    }
    .carousel-caption {
      background-color: rgba(0, 123, 255, 0.7);
      padding: 1rem;
      border-radius: 0.5rem;
    }
    .nuestra-vision, .EMPRESAS {
      text-align: center;
      margin: 40px 0;
    }
    .nuestra-vision h1, .EMPRESAS h1 {
      font-size: 3rem;
    }
    .nuestra-vision p, .EMPRESAS p {
      font-size: 1.25rem;
    }
    .cartita-overlay {
      padding: 2rem;
      background-color: rgba(0, 0, 0, 0.6);
      position: absolute;
      top: 0;
      width: 100%;
    }
    .cartita-overlay h5, .cartita-overlay p, .cartita-overlay li {
      color: #ffffff;
    }
    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }
    footer {
      background-color: #092e72;
      color: white;
      padding: 20px 0;
      text-align: center;
    }
    .footer-section {
      margin: 20px;
    }
    .footer-section h3, .footer-section h4 {
      color: #fff;
    }
    .footer-section a {
      color: #fff;
      text-decoration: none;
    }
    .footer-bottom {
      margin-top: 20px;
      font-size: 0.9rem;
    }
  </style>
</head>

<body>

  <!-- ===== Header ===== -->
  <header class="d-flex justify-content-between align-items-center p-3 bg-dark text-white">
    <div class="logo">
      <span>TR</span> Taller Reyes
    </div>
    <nav>
      <a href="#" class="text-white me-3">Hogar</a>
      <a href="#" class="text-white me-3">Características</a>
      <a href="#" class="text-white me-3">Precios</a>
      <a href="#" class="text-white me-3">Preguntas frecuentes</a>
      <a href="#" class="text-white">Acerca de</a>
    </nav>
  </header>

  <!-- ===== Carousel ===== -->
  <div class="container my-5">
    <h1 class="text-center mb-4">Taller Reyes</h1>

    <div id="mainCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="MARQUITAS.jpg" class="d-block w-100" alt="Marcas Asociadas">
          <div class="carousel-caption d-none d-md-block">
            <h5>Marcas Asociadas</h5>
            <p>Descripción de la imagen 1</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="usar.jpeg" class="d-block w-100" alt="Servicios">
          <div class="carousel-caption d-none d-md-block">
            <h5>Servicios</h5>
            <p>Descripción de la imagen 2</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="consulta.jpg" class="d-block w-100" alt="Consultas">
          <div class="carousel-caption d-none d-md-block">
            <h5>Consultas Full Eficientes</h5>
            <p>Descripción de la imagen 3</p>
          </div>
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>

    <!-- ===== Nuestra Visión ===== -->
    <div class="nuestra-vision">
      <h1>Nuestra Visión</h1>
      <p>Este es un texto editable donde puedes compartir la visión de tu empresa, organización o proyecto.</p>
    </div>

    <!-- ===== Servicios con imagen de fondo ===== -->
    <div class="position-relative mb-5">
      <img src="compresor.jpg" class="img-fluid" alt="Servicios">
      <div class="cartita-overlay">
        <h5>Especializados en:</h5>
        <ul>
          <li>Adaptaciones de solución</li>
          <li>Solución eléctrica</li>
          <li>Instalaciones</li>
          <li>Mantenimientos</li>
          <li><small>Última actualización: hace 3 minutos</small></li>
        </ul>
      </div>
    </div>

    <!-- ===== Información extra ===== -->
    <div class="mb-5 card bg-secondary text-white p-4">
      <img src="consulta.jpg" class="card-img-top" alt="Consulta">
      <div class="card-body">
        <h5 class="card-title">Probando</h5>
        <p class="card-text">Somos la prueba de la cual seremos vivientes.</p>
        <p class="card-text"><small>Última actualización: hace 3 minutos</small></p>
      </div>
    </div>

    <!-- ===== Modelos por Marca ===== -->
    <div class="EMPRESAS">
      <h1>PRESUNTOS FALLOS</h1>
      <p>Explora los modelos y posibles fallas según la marca de tu vehículo.</p>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
      <!-- Repetir bloque por cada marca -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="vrr logo.webp" class="card-img-top" alt="Toyota">
          <div class="card-body text-center">
            <h5 class="card-title">Toyota</h5>
            <form action="res_toyota.php">
              <button type="submit" class="btn btn-primary">Mira tu modelo</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Agrega más marcas abajo -->
      <!-- Ejemplo: Ford -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="foooord logo.jpg" class="card-img-top" alt="Ford">
          <div class="card-body text-center">
            <h5 class="card-title">Ford</h5>
            <form action="PAG_FORD.php">
              <button type="submit" class="btn btn-primary">Mira tu modelo</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Kia, Mazda, etc... -->
      <!-- Puedes copiar/pegar los bloques y cambiar imágenes, títulos y archivos PHP -->
      
      <!-- Agrega aquí más marcas como Kia, Honda, Hyundai, Nissan, etc. -->

    </div>
  </div>

  <!-- ===== Footer ===== -->
  <footer class="footer mt-5">
    <div class="container">
      <div class="row text-start">
        <div class="col-md-4 footer-section">
          <h3>Taller Reyes</h3>
          <p>Somos una empresa que no solo hace tapados para la cabeza, también te damos una personalidad.</p>
        </div>
        <div class="col-md-4 footer-section">
          <h4>Enlaces</h4>
          <ul class="list-unstyled">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Contacto</a></li>
          </ul>
        </div>
        <div class="col-md-4 footer-section">
          <h4>Contacto</h
