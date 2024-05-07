<?php
session_start();

include 'conexion_be.php';

$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];


$validar_login=mysqli_query($conexion, "select * from usuarios where correo='$correo'
and contrasena='$contrasena'");
if(mysqli_num_rows($validar_login)>0){
$_SESSION['usuario']=$correo;
    header("location: ../EstructuraWeb.php");
    exit;
}else{
    echo '
    <script>
    alert("Usuario no existe, por favor verificar sus datos");
   window.location="../IngresoLoginIngreso.php";
    </script>
    ';
    exit;
}
?>
