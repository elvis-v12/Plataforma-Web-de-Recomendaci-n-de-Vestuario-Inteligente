<?php
include 'conexion_be.php';

if (isset($_POST['registrar'])) {
    $dni = trim($_POST['dni']);
    $nombre_completo= trim($_POST['nombre_completo']);
    $apellido = trim($_POST['apellido']);
    $telefono = trim($_POST['telefono']);
    $direccion = trim($_POST['direccion']);
    $correo = trim($_POST['correo']);
    $genero = trim($_POST['genero']);
    $fechaNacimiento = trim($_POST['fechaNacimiento']);
    $usuario = trim($_POST['usuario']);
    $contrasenha = trim($_POST['contraseña']);
    $fechaRegistro = date("y/m/d");
    //SQL    

    $consulta = "call crearCuentaCliente('$dni','$nombre_completo','$apellido','$telefono',
                '$direccion','$correo','$genero','$usuario','$contrasenha','$fechaNacimiento',
                '$fechaRegistro')";
    $resultado = mysqli_query($conexion, $consulta);
    if ($resultado) {
        echo '<h3>EL REGISTRO SE HIZO CORRECTAMENTE</h3>';
    }else{
        echo '<h3>OCURRIO UN ERROR: ' . mysqli_error($conexion) . '</h3>';

    }

}else{
    echo '<h3>POR FAVOR COMPLETE LOS CAMPOS</h3>';

}







/*
// Hashear la contraseña antes de almacenarla en la base de datos
$contrasenaHasheada = hash('sha256', $contrasena);

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
*/
?>
