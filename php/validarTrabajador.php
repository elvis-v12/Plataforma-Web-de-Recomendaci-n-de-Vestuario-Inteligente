<?php
session_start();
include 'conexion_be.php';

$usuario = mysqli_real_escape_string($conexion, $_POST['correo']);
$contrasena = mysqli_real_escape_string($conexion, $_POST['contrasena']);

$query = "SELECT * FROM empusuario WHERE usuario='$usuario'";
$resultado = mysqli_query($conexion, $query);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    $usuario = mysqli_fetch_assoc($resultado);
    
    // Verificar la contraseña ingresada con la contraseña almacenada en la base de datos
    if ($contrasena === $usuario['contrasena']) {
        // Contraseña correcta, iniciar sesión
        $_SESSION['usuario'] = $usuario['usuario'];
        header("Location: ../Sofware1.php");
        exit;
    } else {
        // Contraseña incorrecta
        echo '<script>alert("Contraseña incorrecta, por favor verificar sus datos");</script>';
        echo '<script>window.location="../LoginEmpresa.php";</script>';
        exit;
    }
} else {
   // Usuario no encontrado
   echo '<script>alert("Usuario no existe, por favor verificar sus datos");</script>';
   echo '<script>window.location="../LoginEmpresa.php";</script>';
   exit;
}

mysqli_close($conexion);
?>
