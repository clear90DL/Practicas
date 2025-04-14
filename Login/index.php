<?php
session_start();
error_reporting(0);
if (isset($_SESSION['admin'])) {
    header("Location: principal.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilo3.css">
</head>

<body>
    <div class="logo-principal">
        <h2 class="titulo-acceso">Acceso</h2>
        <div class="login-container">
            <form method="POST" action="login.php" class="login-form">


                <?php
                if (isset($_SESSION['error'])) {
                    echo "<p class='error'>" . $_SESSION['error'] . "</p>";
                    unset($_SESSION['error']);
                }
                ?>

                <label for="txtUsuario">Usuario</label>
                <input type="text" id="txtUsuario" name="txtUsuario" required>

                <label for="txtClave">Clave</label>
                <input type="password" id="txtClave" name="txtClave" maxlength="4" required>

                <label class="checkbox-label">
                    <input type="checkbox" name="recordar" value="ON">
                    Recordar la clave
                </label>

                <button type="submit" name="btnLogin">Login</button>
            </form>
        </div>
        <div class="login-container">
            <img src="icon/001-empleados.png" alt="imagen" width="200px" height="200px">
        </div>
    </div>
</body>

</html>