<?php
session_start();
if (!isset($_SESSION['correo']) && !isset($_SESSION['contrasena'])) {
  if (!$_SESSION['rol'] == 'A') {
    header("Location: ../index.php");
    exit();
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snacks</title>
  <link rel="stylesheet" href="../../CSS/sp.css">
  <link rel="stylesheet" href="../../CSS/bootstrap-5.0.2/bootstrap-5.0.2-dist/css/bootstrap.min.css">
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
          <li><a href="#menu">Pedidos</a></li>
          <li><a href="../raspados.php">Raspados</a></li>
          <li><a href="../snacks.php">Snacks</a></li>
          <li><a href="#carrito">Especialidades</a></li>
          <li><a href="../../php/cerrarSesion.php">Cerrar Sesion</a></li>
        </ul>
      </nav>
    </div>
    <div class="hora-actual" id="hora-actual"></div>
  </header>
  <main class="Servicios">
    <?php
    include_once 'snacks.php';
    $snk = new snacks();
    $snk->conexion();
    if (isset($_REQUEST['opciones'])) {
      switch ($_REQUEST['opciones']) {
        case 1:
          $foto = isset($_FILES['imagen']['tmp_name']) ? file_get_contents($_FILES['imagen']['tmp_name']) : "../../img/bg1.jpg";
          $snk->inicializar($foto, $_REQUEST['nombre'], $_REQUEST['precio'], $_REQUEST['descripcion'], $_REQUEST['tipo']);
          $snk->agregarSnacks();
          break;
        case 2:
          $snk->modificar($_REQUEST['codigo']);
          break;
        case 3:
          $snk->modificar2($_FILES['imagen'], $_POST['nombre'], $_POST['precio'], $_POST['descripcion'], $_REQUEST['codigo']);
          break;
        case 4:
          $snk->borrar($_REQUEST['codigo']);
          break;
        default:
          $snk->pagina();
          break;
      }
    } else {
      $snk->pagina();
    }
    $snk->cerrarBD();
    ?>
  </main>
</body>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script src="../js/portada.js"></script>
<script src="../js/apis.js"></script>

</html>