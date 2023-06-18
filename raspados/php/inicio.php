<?php
include 'conexion.php';

session_start();
if (isset($_POST['correo']) && isset($_POST['contrasena'])) {
    function validar($datos)
    {
        $datos = trim($datos);
        $datos = stripslashes($datos);
        $datos = htmlspecialchars($datos);
        return $datos;
    }

    $correo = $_POST['correo'];
    $contra = $_POST['contrasena'];

    $contraMd5 = md5($contra);
    if(empty($contra) && empty($correo)){
        header("Location: ../inicioSesion.php?error=El correo y la contraseña son requeridos");
        exit();
    }
    elseif (empty($correo)) {
        header("Location: ../inicioSesion.php?error=El correo es requerido");
        exit();
    } elseif (empty($contra)) {
        header("Location: ../inicioSesion.php?error=La contraseña es requerida");
        exit();
    } else {
        $sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contraMd5'";
        $result = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['correo'] === $correo && $row['contrasena'] === $contraMd5 && $row['rol'] === 'C') {
                // Inicio de sesión exitoso
                $_SESSION['correo'] = $row['correo'];
                $_SESSION['rol'] = $row['rol'];
                $_SESSION['contrasena'] = $row['contrasena'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['id'] = $row['id'];

                header("Location: ../cliente/menu.php");
                exit();
            } elseif($row['correo'] === $correo && $row['contrasena'] === $contraMd5 && $row['rol'] === 'A') {
                // Inicio de sesión exitoso para un administrador
                $_SESSION['correo'] = $row['correo'];
                $_SESSION['rol'] = $row['rol'];
                $_SESSION['contrasena'] = $row['contrasena'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['id'] = $row['id'];
                header("location: ../admin/snacks.php");
                exit();
            } else {
                // Contraseña incorrecta
                header("Location: ../inicioSesion.php?error=El correo o la contraseña son incorrectos");
                exit();
            }
        } else {
            // No se encontró ninguna coincidencia de usuario
            header("Location: ../inicioSesion.php?error=El correo o la contraseña son incorrectos");
            exit();
        }
    }
} else {
    header("Location: ../inicioSesion.php");
}

?>