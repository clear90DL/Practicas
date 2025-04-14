<?php
session_start();
error_reporting(0);

// Verifica si el formulario se ha enviado
if (isset($_POST['txtDescripcion'])) {
    if (isset($_SESSION['misProductos'])) {
        $productos = $_SESSION['misProductos'];
    } else {
        $productos = array();  // Si no existe, inicializa un array vacío
    }

    // Agrega el nuevo producto
    $productos[$_POST['txtDescripcion']] = array(
        'descripción' => $_POST['txtDescripcion'],
        'stock' => $_POST['txtStock'],
        'precio' => $_POST['txtPrecio']
    );

    // Guarda los productos actualizados en la sesión
    $_SESSION['misProductos'] = $productos;

    // Redirige a la página de listado de productos
    header('Location: listadoProductos.php');
    exit; // Termina la ejecución del script después de la redirección
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Registro de Producto</title>
    <link href="css/estilo2.css" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
        <header>
            <?php include 'encabezado.php'; ?>
        </header>
        <section>
            <form name="frmPrincipal" method="POST" action="">
                <table border="1" width="600" cellspacing="10" cellpadding="1">
                    <tr>
                        <td>Descripción del Producto</td>
                        <td><input type="text" name="txtDescripcion" required size="60" /></td>
                    </tr>
                    <tr>
                        <td>Stock</td>
                        <td><input type="number" name="txtStock" required /></td>
                    </tr>
                    <tr>
                        <td>Precio</td>
                        <td><input type="number" name="txtPrecio" required step="0.01" /></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Registrar producto" />
                        </td>
                    </tr>
                </table>
            </form>
        </section>
    </div>
    <footer id="pie">
        <p id="centrado">
            <a href="index.php">Seguir comprando..!!</a>
        </p>
        <?php include 'pie.php'; ?>
    </footer>
</body>

</html>