<?php
$conexion = mysqli_connect("localhost", "root", "", "login_register_db"); 
/*$host = "bnzqkldgtjndtfqfpu6g-mysql.services.clever-cloud.com";
$username = "u0chwn7liy6yikyi";
$password = "TzEdwl5RBD6sQpi82fqA";
$database = "bnzqkldgtjndtfqfpu6g";
$port = 3306;

$conexion = mysqli_connect($host, $username, $password, $database, $port);
*/
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
