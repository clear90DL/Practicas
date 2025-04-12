<?php
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
?>