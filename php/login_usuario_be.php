<?php
session_start();
include 'conexion_be.php';
// Habilitar la visualización de errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['entrar'])) {
    if (strlen($_POST['username']) >= 1 && strlen($_POST['contrasena']) >= 1) {
        $usuario = trim($_POST['username']);
        $contrasena = trim($_POST['contrasena']);
        $consulta = "SELECT * from usuario WHERE nombreUsuario='$usuario';";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado && mysqli_num_rows($resultado) > 0) {
            $cuenta = mysqli_fetch_assoc($resultado);
            $contrasenaHasheada = hash('sha256', $contrasena);

            if ($contrasenaHasheada === $cuenta['contrasena']) {
                header("Location: http://localhost/Plataforma-Web-de-Recomendaci-n-de-Vestuario-Inteligente/Cataloco_de_Productos.php");
                exit();
            } else {
                echo '<script>alert("Contraseña incorrecta, por favor verificar sus datos");</script>';
                echo '<script>window.location="../LoginIngreso.php";</script>';
                exit;
            }
        } else { // Usuario no encontrado
            echo '<script>alert("Usuario no existe, por favor verificar sus datos");</script>';
            echo '<script>window.location="../LoginIngreso.php";</script>';
            exit;
        }
    } else {
        echo '<script>alert("Complete los campos por favor");</script>';
        echo '<script>window.location="../LoginIngreso.php";</script>';
    }
}
ob_end_flush();
mysqli_close($conexion);
