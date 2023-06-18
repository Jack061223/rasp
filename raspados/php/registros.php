<?php
include 'conexion.php';

$nombre_completo = $_POST['nombre_completo'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$conContra = $_POST['conContrasena'];
$rol = $_POST['rol'];

if ($contrasena && $conContra) {
    $conMd5 = md5($contrasena);
    $local = "INSERT INTO usuarios(nombre, usuario, rol, correo, contrasena) VALUES ('$nombre_completo', '$usuario', '$rol', '$correo', '$conMd5')";
    $ejecutar = mysqli_query($conexion, $local);
} else {
    header("Location: ../inicioSesion.php");
    exit();
}

if ($ejecutar) {
    echo '<script>
    alert("USUARIO EXITOSAMENTE REGISTRADO");
    window.location.href = "../inicioSesion.php";
    </script>';
    exit();
} else {
    $error = "Hubo un error al registrarse. Inténtalo de nuevo.";
    header("Location: ../inicioSesion.php?error=" . urlencode($error));
    exit();
}
