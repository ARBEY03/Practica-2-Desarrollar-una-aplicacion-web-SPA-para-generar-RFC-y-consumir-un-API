<?php
include 'conexion.php';

$idProd = $_GET['idProd'];

$sql = "DELETE FROM productos WHERE idProd='$idProd'";

if ($conn->query($sql) === TRUE) {
    echo "Producto eliminado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: ventas.php");
?>
