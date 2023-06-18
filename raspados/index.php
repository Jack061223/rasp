<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raspados México Lindo</title>
  <link rel="stylesheet" href="CSS/styles.css">
</head>

<body>
  <header>
    <div class="header-container">
      <h1>Raspados México Lindo</h1>
      <a href="inicioSesion.php" class="login-link">Inicio de Sesión</a>
    </div>
    <div class="header-carousel">
      <div class="carousel-slide">
        <img src="carousel1.jpg" alt="Carousel Image 1">
      </div>
      <div class="carousel-slide">
        <img src="carousel2.jpg" alt="Carousel Image 2">
      </div>
      <div class="carousel-slide">
        <img src="carousel3.jpg" alt="Carousel Image 3">
      </div>
    </div>
  </header>

  <section id="offer-section">
    <h2>Lo que te ofrecemos</h2>
    <div class="offers-carousel">
      <div class="carousel-slide">
        <img src="offer1.jpg" alt="Offer Image 1">
        <h3>Oferta 1</h3>
        <p>Descripción de la oferta 1.</p>
      </div>
      <div class="carousel-slide">
        <img src="offer2.jpg" alt="Offer Image 2">
        <h3>Oferta 2</h3>
        <p>Descripción de la oferta 2.</p>
      </div>
      <div class="carousel-slide">
        <img src="offer3.jpg" alt="Offer Image 3">
        <h3>Oferta 3</h3>
        <p>Descripción de la oferta 3.</p>
      </div>
    </div>
  </section>

  <section id="location-section">
    <h2>Nos puedes localizar</h2>
    <div class="location-container">
      <div class="address">
        <h3>Dirección</h3>
        <p>Raspados México Lindo, México Lindo, Benito Juárez, Nezahualcóyotl, Estado de México</p>
      </div>
      <div id="map"></div>
    </div>
  </section>

  <footer>
    <p>&copy; 2023 Raspados Deliciosos. Todos los derechos reservados.</p>
  </footer>

  <script src="JS/script.js"></script>
</body>

</html>
