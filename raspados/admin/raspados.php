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
  <title>Raspados</title>
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
          <li><a href="#">Pedidos</a></li>
          <li><a href="#">Raspados</a></li>
          <li><a href="snacks.php">Snacks</a></li>
          <li><a href="#carrito">Especialidades</a></li>
          <li><a href="../php/cerrarSesion.php">Cerrar Sesion</a></li>
        </ul>
      </nav>
    </div>
    <div class="hora-actual" id="hora-actual"></div>
  </header>
  <main class="Servicios">
    <h2>Raspados "Raspados Cielito Lindo"</h2>
    <div class="tabla-container">
      <div class="btn-agregar">
        <label for="add" onclick=agregar()><box-icon type='solid' name='plus-circle'></box-icon>Agregar</label>
      </div>
      <div id="agregar" class="formulario">
        <h3>Raspados Agregar</h3>
        <form method="post" enctype="multipart/form-data">
          <div class="imagen">
            <label for="imagen"><box-icon name='camera'></box-icon></label>
            <input type="file" name="imagen" id="imagen" onchange="mostrarImagen()" accept="image/*" autocomplete="off">
            <img src="" id="vista-previa" alt="">
          </div>
          <div class="datos">
            <label for="nom">Nombre</label>
            <input type="text" name="nombre" id="nom" autocomplete="off">
            <label for="precio">Precio</label>
            <input type="number" name="precio" id="precio" autocomplete="off">
            <label for="desc">Descripcion</label>
            <textarea name="descripcion" id="desc" cols="25" rows="5" autocomplete="off"></textarea>
          </div>
          <div>
          </div>
          <div class="botones">
            <button class="btn-borrar" id="cancelarA" type="button" onclick=esconder()>Cancelar</button>
            <input type="hidden" name="opciones" value="1" id="agg">
            <button class="btn-modificar" id="agregarA" type="submit" onclick=esconder()>Agregar</button>
          </div>
        </form>
      </div>
      <div id="modificar" class="modificar">
        <h3>Raaspados Mod</h3>
        <form action="php/snacksCtrl.php" method="post" enctype="multipart/form-data">
          <div class="imagen">
            <label for="imagen"><box-icon name="camera"></box-icon></label>
            <input type="file" name="imagen" id="imagen" onchange="mostrarImagen()" accept="image/*" required autocomplete="off">
            <img id="vista-previa" src="data:image/*;base64,'.base64_encode($row[1]) . '">
          </div>
          <div class="datos">
            <label for="nom">Nombre</label>
            <input type="text" name="nombre" id="nom" autocomplete="off" value="'.$row['nombre'].'">
            <label for="precio">Precio</label>
            <input type="number" name="precio" id="precio" autocomplete="off" value="'.$row['precio'].'">
            <label for="desc">Descripcion</label>
            <textarea name="descripcion" id="desc" cols="25" rows="5" autocomplete="off">'.$row['descripcion'].'</textarea>
          </div>
          <div>
          </div>
          <div class="botones">
            <button class="btn-borrar" id="cancelar" type="button" onclick=esconderMod()>Cancelar</button>
            <input type="hidden" name="opciones" value="1" id="agg">
            <button class="btn-modificar" id="agregar" type="submit">Modificar</button>
          </div>
        </form>
      </div>
  </main>
</body>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script src="js/portada.js"></script>
<script src="js/apis.js"></script>

</html>