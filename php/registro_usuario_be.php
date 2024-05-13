<?php
include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Hashear la contraseña antes de almacenarla en la base de datos
$contrasena_hasheada = password_hash($contrasena, PASSWORD_DEFAULT);

$query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena)
          VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena_hasheada')";

// Verificar que el correo no esté repetido en la base de datos
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
if(mysqli_num_rows($verificar_correo) > 0){ 
    echo '<script>alert("El Correo ya existe, intenta con otro correo");</script>';
    echo '<script>window.location.href="../LoginIngreso.php";</script>';
    exit();
}

// Verificar que el usuario no esté repetido en la base de datos
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");
if(mysqli_num_rows($verificar_usuario) > 0){ 
    echo '<script>alert("Este Usuario ya existe");</script>';
    echo '<script>window.location.href="../LoginIngreso.php";</script>';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo "<script>alert('Usuario almacenado correctamente');</script>";
    echo "<script>window.location='../LoginIngreso.php';</script>";
} else {
    echo "<script>alert('Inténtalo de nuevo, error al almacenar el usuario');</script>";
}

mysqli_close($conexion);
?>
