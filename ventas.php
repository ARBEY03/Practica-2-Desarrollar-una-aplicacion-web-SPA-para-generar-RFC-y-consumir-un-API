<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Inventario</title>
</head>
<body>
    <h1>Inventario de Productos</h1>
    <form action="insertar.php" method="POST">
        <label for="idProd">idProd:</label>
        <input type="number" name="idProd" required><br>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="precio">Precio:</label>
        <input type="number" step="0.01" name="precio" required><br>

        <label for="existencia">Existencia:</label>
        <input type="number" name="existencia" required><br>

        <button type="submit">Registrar</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>idProd</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Existencia</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'conexion.php';
            $sql = "SELECT * FROM productos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['idProd']}</td>
                        <td>{$row['nombre']}</td>
                        <td>\${$row['precio']}</td>
                        <td>{$row['existencia']}</td>
                        <td><a href='eliminar.php?idProd={$row['idProd']}'>Eliminar</a></td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No hay productos registrados</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
