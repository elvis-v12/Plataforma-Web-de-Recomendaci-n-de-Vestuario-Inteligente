<?php
$conexion = mysqli_connect("localhost", "root", "", "login_register_db"); 

// Revisamos si la conexión fue exitosa
if (!$conexion) {
    // Si hay un error, mostramos el mensaje de error
    echo "Error al conectar a MySQL: " . mysqli_connect_error();
} else {
    // Si la conexión es exitosa, mostramos un mensaje de éxito
    echo "Conexión exitosa a la base de datos";
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Registrate</title>
