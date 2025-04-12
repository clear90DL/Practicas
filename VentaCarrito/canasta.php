<?php
error_reporting(0);
session_start();
include('capturaDatos.php');
/*include('asignaciones.php');*/

function getProductos()
{
    return [
        'p001' => ['descripcion' => 'Gaseosa', 'precio' => 1.5],
        'p002' => ['descripcion' => 'Mayonesa en sobre', 'precio' => 2.5],
        'p003' => ['descripcion' => 'Chocolate para niños', 'precio' => 11],
        'p004' => ['descripcion' => 'Fideos', 'precio' => 1.5],
        'p005' => ['descripcion' => 'Conservas', 'precio' => 5],
        'p006' => ['descripcion' => 'Chocolate', 'precio' => 22],
        'p007' => ['descripcion' => 'Café 300mg.', 'precio' => 18.5],
        'p008' => ['descripcion' => 'Mayonesa pote', 'precio' => 15],
        'p009' => ['descripcion' => 'Crema Dental', 'precio' => 7.5],
        'p010' => ['descripcion' => 'Cubito de pollo', 'precio' => 1],
    ];
}

function asignaPrecio($codigo)
{
    $productos = getProductos();
    return $productos[$codigo]['precio'] ?? 0;
}
function muestraDescripcion($codigo)
{
    $productos = getProductos();
    return $productos[$codigo]['descripcion'] ?? 'Producto desconocido';
}

if (!function_exists('asignaPrecio')) {
    echo "<p style='color:red;'>❌ La función asignaPrecio() no está disponible.</p>";
}

$codigo = getProducto();
$cantidad = getCantidad();
$productos = "carrito";
$bandera = false;

if (!isset($_SESSION[$productos])) {
    $_SESSION[$productos] = []; // inicializa arreglo
}

foreach ($_SESSION[$productos] as $pro => $cant) {
    if ($codigo == $pro) {
        $_SESSION[$productos][$pro] += $cantidad;
        $bandera = true;
    }
}

if (!$bandera && $codigo !== '') {
    $_SESSION[$productos][$codigo] = $cantidad;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Carrito de Compras</title>
    <link href="css/estilo.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php include('encabezado.php'); ?>
    </header>
    <section>
        <table border="1" width="550" cellspacing="10" cellpadding="0">
            <tr>
                <td><img src="img/carrito.jpg" width="80" height="80" /></td>
            </tr>
            <tr>
                <th>Código</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
            <?php
            $tSubtotal = 0;
            foreach ($_SESSION[$productos] as $cod => $cant) {
                $precio = asignaPrecio($cod);
                $descripcion = muestraDescripcion($cod);
                $subtotal = $precio * $cant;
                $tSubtotal += $subtotal;
                ?>
            <tr>
                <td id="centrado"><?php echo $cod; ?></td>
                <td><?php echo $descripcion; ?></td>
                <td id="derecha"><?php echo '$' . number_format($precio, 2); ?></td>
                <td id="centrado"><?php echo $cant; ?></td>
                <td id="derecha"><?php echo '$' . number_format($subtotal, 2); ?></td>
            </tr>
            <?php
            }
            ?>
            <tr>
                <td id="resaltado">Total a Pagar</td>
                <td colspan="3"></td>
                <td id="totales"><?php echo '$' . number_format($tSubtotal, 2); ?></td>
            </tr>
            <tr>
                <td colspan="4"><a href="index.php">Seguir comprando..!!</a></td>
                <td><a href="destruir.php">Finalizar la compra</a></td>
            </tr>
        </table>
    </section>
    <footer>
        <?php include('pie.php'); ?>
    </footer>
</body>

</html>