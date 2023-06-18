<?php
session_start();
if (!isset($_SESSION['correo']) && !isset($_SESSION['contrasena'])) {
  if (!$_SESSION['rol'] == 'A') {
    header("Location: ../index.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snacks</title>
  <link rel="stylesheet" href="../CSS/sp.css">
  <link rel="stylesheet" href="../CSS/bootstrap-5.0.2/bootstrap-5.0.2-dist/css/bootstrap.min.css">
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
          <li><a href="raspados.php">Raspados</a></li>
          <li><a href="#">Snacks</a></li>
          <li><a href="#carrito">Especialidades</a></li>
          <li><a href="../php/cerrarSesion.php">Cerrar Sesion</a></li>
        </ul>
      </nav>
    </div>
    <div class="hora-actual" id="hora-actual"></div>
  </header>
  <main class="Servicios">
    <h2>Snacks "Raspados Cielito Lindo"</h2>
    <div class="tabla-container">
      <div class="btn-agregar">
        <label for="add" onclick=agregar()><box-icon type='solid' name='plus-circle'></box-icon>Agregar</label>
      </div>
      <div id="agregar" class="formulario">
        <h3>Snacks</h3>
        <form action="php/snacksCtrl.php" method="post" enctype="multipart/form-data">
          <div class="imagen">
            <label for="imagen"><box-icon name='camera'></box-icon></label>
            <input type="file" name="imagen" id="imagen" onchange="mostrarImagen()" accept="image/*" required autocomplete="off">
            <img src="" id="vista-previa" alt="">
          </div>
          <div class="datos">
            <label for="nom">Nombre</label>
            <input type="text" name="nombre" id="nom" autocomplete="off">
            <label for="precio">Precio</label>
            <input type="number" name="precio" id="precio" autocomplete="off" step="0.01">
            <label for="desc">Descripcion</label>
            <textarea name="descripcion" id="desc" cols="25" rows="5" autocomplete="off"></textarea>
            <input type="hidden" name="tipo" value="Snacks">
          </div>
          <div>
          </div>
          <div class="botones">
            <a href=snacks.php><button class="btn-borrar" id="cancelarA" type="button">Cancelar</button></a>
            <input type="hidden" name="opciones" value="1">
            <button class="btn-modificar" id="agregarA" type="submit">Agregar</button>
          </div>
        </form>
      </div>
      <?php
      include_once '../php/conexion.php';
      $registros = mysqli_query($conexion, "SELECT * FROM productos WHERE tipo = 'Snacks'");
      if ($registros) {
        echo '<table class="tablasAdmin">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripción</th>
                <th colspan="2">Opciones</th>
            </tr>
        </thead>
        <tbody>';
        foreach ($registros as $reg) {
          echo '
            <tr>
                <td><img src="data:image/*;base64,' . base64_encode($reg['imagen']) . '"></td>
                <td>' . $reg['nombre'] . '</td>
                <td>' . $reg['precio'] . '</td>
                <td>' . $reg['descripcion'] . '</td>
                <td>
                    <form action="php/snacksCtrl.php" method="post">
                        <input type="hidden" name="opciones" value="4">
                        <input type="hidden" name="codigo" value="' . $reg['id'] . '">
                        <button class="btn-borrar" type="submit" data-id="' . $reg['id'] . '">Borrar</button>
                    </form>
                </td>
                <td>
                    <form action="php/snacksCtrl.php" method="post">
                        <input type="hidden" name="opciones" value="2">
                        <input type="hidden" name="codigo" value="' . $reg['id'] . '">
                        <input type="submit" class="btn-modificar" value="Modificar">
                    </form>
                </td>
            </tr>';
        }

        echo '</tbody></table>';
      } else {
        echo '<div class="sinProducto"><p>Sin Snacks</p></div>';
      }
      ?>
  </main>
</body>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script src="js/portada.js"></script>
<script src="js/apis.js"></script>

</html>