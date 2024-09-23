<?php
include 'conexion.php';

$idProd = $_POST['idProd'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$existencia = $_POST['existencia'];

$sql = "INSERT INTO productos (idProd, nombre, precio, existencia) VALUES ('$idProd', '$nombre', '$precio', '$existencia')";

if ($conn->query($sql) === TRUE) {
    echo "Producto registrado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: ventas.php");
?>
