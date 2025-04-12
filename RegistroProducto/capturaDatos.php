<?php
// Devuelve la descripción del producto si se ha enviado el formulario, sino retorna un valor vacío
function getDescripcion()
{
    return isset($_POST['txtDescripcion']) ? $_POST['txtDescripcion'] : '';
}

// Devuelve el stock del producto si se ha enviado el formulario, sino retorna un valor vacío
function getStock()
{
    return isset($_POST['txtStock']) ? $_POST['txtStock'] : '';
}

// Devuelve el precio del producto si se ha enviado el formulario, sino retorna un valor vacío
function getPrecio()
{
    return isset($_POST['txtPrecio']) ? $_POST['txtPrecio'] : '';
}
?>