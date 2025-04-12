<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Registro de Productos</title>
    <link href="css/estilo.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php include 'encabezado.php'; ?>
    </header>

    <section>
        <?php include('capturaDatos.php'); ?>

        <form name="frmPrincipal" method="POST">
            <table border="1" width="600" cellspacing="10" cellpadding="0">
                <tr>
                    <td>Descripción del Producto</td>
                    <td>
                        <input type="text" name="txtDescripcion" required value="<?php echo getDescripcion(); ?>"
                            size="60" />
                    </td>
                </tr>
                <tr>
                    <td>Stock</td>
                    <td>
                        <input type="number" name="txtStock" required min="0" value="<?php echo getStock(); ?>" />
                    </td>
                </tr>
                <tr>
                    <td>Precio del producto</td>
                    <td>
                        <input type="number" name="txtPrecio" required min="0" step="0.01"
                            value="<?php echo getPrecio(); ?>" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="btnListado" value="Ver listado de productos"
                            formaction="listadoProductos.php" />
                        <input type="submit" name="btnRegistrar" value="Registrar producto"
                            formaction="agregarProducto.php" />
                    </td>
                </tr>
            </table>
        </form>
    </section>

    <footer>
        <?php include 'pie.php'; ?>
    </footer>
</body>

</html>