<?php
session_start();

if ($_POST['txtUsuario'] == 'pmtorres' && $_POST['txtClave'] == 'php') {
    $_SESSION['admin'] = $_POST['txtUsuario'];
} else {
    $_SESSION['error'] = 'Usuario incorrecto';
}

header('Location: index.php');
exit();
?>