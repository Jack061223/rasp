<?php
session_start();

if (isset($_SESSION['correo']) && isset($_SESSION['contrasena'])) {
    if ($_SESSION['rol'] == 'C') {
        header("Location: cliente/menu.php");
        exit();
    } elseif ($_SESSION['rol'] == 'A') {
        header("Location: admin/snacks.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/estilos.css">
</head>

<body>

    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="php/inicio.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <!-- <hr>
                    <?php
                    if (isset($_GET['error'])) {
                    ?>
                        <p class="error"><?php echo $_GET['error'] ?></p>
                    <?php
                    }
                    ?>
                    <hr> -->
                    <input type="email" placeholder="Correo Electrónico" name="correo" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required> 
                    <button type="submit">Iniciar Sesión</button>
                </form>

                <!--Register-->
                <form action="php/registros.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo" required>
                    <input type="text" name="direccion" placeholder="Direccion ">
                    <input type="email" placeholder="Correo Electrónico" name="correo" required>
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <input type="password" name="conContrasena" placeholder="Confirmar Contraseña" required>
                    <input type="hidden" name="rol" value="C"> 
                    <button type="submit">Regístrarse</button>
                </form>
            </div>
        </div>

    </main>

    <script src="JS/local.js"></script>
</body>

</html>