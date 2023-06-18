<?php
session_start();
if (!isset($_SESSION['correo']) && !isset($_SESSION['contrasena'])) {
  if (!$_SESSION['rol'] == 'C') {
    header("Location: ../index.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raspados México Lindo</title>
  <link rel="stylesheet" href="../CSS/sp.css">
</head>

<body>
  <header>
    <div class="header-container">
      <div class="user-profile">
        <img src="profile.jpg" alt="User Profile">
        <span><?php echo $_SESSION['nombre'] ?></span>
      </div>
      <nav>
        <ul>
          <li><a href="perfil.php">Perfil</a></li>
          <li><a href="menu.php">Menú</a></li>
          <li><a href="#ofertas">Ofertas</a></li>
          <li><a href="#carrito">Carrito</a></li>
          <li><a href="../php/cerrarSesion.php">Cerrar Sesion</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="carousel-section" class="section">
    <div class="carousel-container">
      <div class="carousel">
        <img src="imagen1.jpg" alt="Imagen 1">
        <img src="imagen2.jpg" alt="Imagen 2">
        <img src="imagen3.jpg" alt="Imagen 3">
      </div>
    </div>
  </section>

  <section id="favoritos" class="section">
    <h2>Mis Favoritos</h2>
    <div class="favoritos-container">
      <div class="column">
        <h3>Raspados Favoritos</h3>
        <ul>
          <li>Raspado 1</li>
          <li>Raspado 2</li>
          <li>Raspado 3</li>
        </ul>
      </div>
      <div class="column">
        <h3>Snacks Favoritos</h3>
        <ul>
          <li>Snack 1</li>
          <li>Snack 2</li>
          <li>Snack 3</li>
        </ul>
      </div>
      <div class="column">
        <h3>Paquetes Favoritos</h3>
        <ul>
          <li>Paquete 1</li>
          <li>Paquete 2</li>
          <li>Paquete 3</li>
        </ul>
      </div>
    </div>
  </section>

  <section id="menu" class="section">
    <!-- Contenido del menú -->
  </section>

  <section id="paquetes" class="section">
    <!-- Contenido de los paquetes -->
  </section>

  <section id="ofertas" class="section">
    <!-- Contenido de las ofertas -->
  </section>

  <section id="carrito" class="section">
    <!-- Contenido del carrito -->
  </section>

  <footer>
    <p>&copy; 2023 Raspados Deliciosos. Todos los derechos reservados.</p>
  </footer>

  <script src="JS/pj.js"></script>
</body>

</html>