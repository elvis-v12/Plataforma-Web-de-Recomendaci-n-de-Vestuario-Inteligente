<?php
include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Generar una sal aleatoria
$sal = uniqid();

// Concatenar la sal con la contraseña
$contrasena_con_sal = $sal . $contrasena;

// Encriptar la contraseña con la sal
$contrasena_encriptada = hash('sha512', $contrasena_con_sal);

$query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena)
          VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena_encriptada')";
          //VERIFICAR QUE LOS CORREOS NO SE REPITAN EN LA BD
         
          $verificar_correo=mysqli_query($conexion, "select * from usuarios where correo='$correo'");
          if(mysqli_num_rows($verificar_correo)>0){ 
             echo '<script>alert("El Correo ya existe, intenta con otro correo");</script>';
             echo '<script>window.location.href="../IngresoLoginIngreso.php";</script>';
            exit();
            }

            //VERIFICAR QUE EL USUARIO NO SE REPITA EN LA BD
            $verificar_usuario=mysqli_query($conexion, "select * from usuarios where usuario='$usuario'");
          if(mysqli_num_rows($verificar_usuario)>0){ 
             echo '<script>alert("Este Usuario ya existe");</script>';
             echo '<script>window.location.href="../IngresoLoginIngreso.php";</script>';
            exit();
            }

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo "<script>alert('Usuario almacenado correctamente');</script>";
    echo "<script>window.location='../IngresoLoginIngreso.php';</script>";
} else {
    echo "<script>alert('Intentalo de nuevo, error al almacenar el usuario');</script>";
}

mysqli_close($conexion);


?>
