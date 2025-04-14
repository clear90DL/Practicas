<?php
error_reporting(E_ALL);  // Mostrar errores durante el desarrollo
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Listado de Productos</title>
    <link href="css/estilo2.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <header>
            <?php include 'encabezado.php'; ?>
        </header>
        <section>
            <table border="1" width="600" cellspacing="10" cellpadding="1">
                <tr>
                    <th>DESCRIPCION DEL PRODUCTO</th>
                    <th>STOCK</th>
                    <th>PRECIO</th>
                </tr>
                <?php
                if (isset($_SESSION['misProductos']) && !empty($_SESSION['misProductos'])) {
                    foreach ($_SESSION['misProductos'] as $producto) {
                        // Verificación de datos del producto
                        $descripcion = isset($producto['descripción']) ? $producto['descripción'] : 'N/A';
                        $stock = isset($producto['stock']) ? $producto['stock'] : 'N/A';
                        $precio = isset($producto['precio']) ? $producto['precio'] : 0;

                        // Mostrar el producto
                        ?>
                        <tr>
                            <td><?php echo htmlspecialchars($descripcion); ?></td>
                            <td><?php echo htmlspecialchars($stock); ?></td>
                            <td><?php echo '$' . number_format($precio, 2); ?></td>
                        </tr>
                        <?php
                    }
                } else {
                    echo '<p id="centrado">No hay productos en la canasta..!!!</p>';
                }
                ?>
            </table>
        </section>
    </div>
    <footer id="pie">
        <p id="centrado">
            <a href="index.php">Seguir comprando..!!</a> |
            <a href="destruir.php">Cerrar sesión</a>
        </p>
        <?php include 'pie.php'; ?>
    </footer>
</body>

</html>


</html>