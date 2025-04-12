<?php
function getProductos()
{
    return [
        'p001' => ['descripcion' => 'Gaseosa', 'precio' => 1.5],
        'p002' => ['descripcion' => 'Mayonesa en sobre', 'precio' => 2.5],
        'p003' => ['descripcion' => 'Chocolate para niños', 'precio' => 11],
        'p004' => ['descripcion' => 'Chocolate para niños', 'precio' => 1.5],
    ];
}

function asignaPrecio($codigo)
{
    $productos = getProductos();
    return $productos[$codigo]['precio'] ?? 0;
}

echo "Precio p001: " . asignaPrecio("p001") . "<br/>"; // Debe mostrar 1.5

echo "Precio p002: " . asignaPrecio("p002") . "<br/>"; // Debe mostrar 2.5

echo "Precio p003: " . asignaPrecio("p003") . "<br/>"; // Debe mostrar 11

echo "Precio p004: " . asignaPrecio("p004") . "<br/>"; // Debe mostrar 1.5
?>