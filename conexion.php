<?php
// Datos de conexión a la base de datos
$host = "localhost";       // Cambia esto si la base de datos no está en tu computadora
$usuario = "root";   // Coloca aquí tu usuario de la base de datos
$password = "Arbey3173@"; // Coloca aquí tu contraseña de la base de datos
$base_datos = "inventario"; // Nombre de la base de datos que vas a usar

// Crear la conexión
$conn = new mysqli($host, $usuario, $password, $base_datos);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Establecer el conjunto de caracteres (opcional, pero recomendado)
$conn->set_charset("utf8");
?>
