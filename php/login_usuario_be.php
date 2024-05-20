<?php
session_start();
include 'conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$query = "SELECT * FROM usuarios WHERE correo='$correo'";
$resultado = mysqli_query($conexion, $query);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    $usuario = mysqli_fetch_assoc($resultado);
    
    // Verificar la contraseña ingresada con el hash almacenado en la base de datos
    if (password_verify($contrasena, $usuario['contrasena'])) {
        // Contraseña correcta, iniciar sesión
        $_SESSION['usuario'] = $correo;
        header("location: ../Cataloco_de_Productos.php");
        exit;
    } else {
        // Contraseña incorrecta
        echo '<script>alert("Contraseña incorrecta, por favor verificar sus datos");</script>';
        echo '<script>window.location="../LoginIngreso.php";</script>';
        exit;
    }
} else {
    // Usuario no encontrado
    echo '<script>alert("Usuario no existe, por favor verificar sus datos");</script>';
    echo '<script>window.location="../LoginIngreso.php";</script>';
    exit;
}

mysqli_close($conexion);
?>
