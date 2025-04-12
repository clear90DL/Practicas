<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>CONTROL DE CLIENTES</title>
    <link href="css/estilo4.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php
        session_start();
        require 'encabezado.php';
        echo "<p id='centrado'>";
        echo '<h2 style="color: #9400D3">Bienvenido > ' . $_SESSION['admin'] . '</h2><br>';
        echo "|<a href='cerrar.php'> Cerrar Sesion </a>|";
        echo '</p>';
        ?>
    </header>
    <section>
        <table class="menu-opciones">
            <tr>
                <td>
                    <a href="#">
                        <img src="icon/agregar.png" width="60px" height="10px" alt="Registro" />
                    </a>
                </td>
                <td>
                    <a href="#">Registro de clientes</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="#">
                        <img src="icon/listar.png" width="100px" height="50px" alt="Listado" />
                    </a>
                </td>
                <td>
                    <a href="#">Listado de Clientes</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="javascript:close()">
                        <img src="icon/salir.png" width="100px" height="50px" alt="Salir" />
                    </a>
                </td>
                <td>
                    <a href="javascript:close()">Salir</a>
                </td>
            </tr>
        </table>
    </section>
    <footer>
        <?php require 'pie.php'; ?>
    </footer>
</body>

</html>