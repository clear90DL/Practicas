<?php
function getProducto()
{
    return isset($_POST['selProducto']) ? $_POST['selProducto'] : '';
}

function getCantidad()
{
    return isset($_POST['txtCantidad']) && is_numeric($_POST['txtCantidad']) ? (int) $_POST['txtCantidad'] : 0;
}
?>