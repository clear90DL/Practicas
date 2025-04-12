<?php session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Inicio Encuesta</title>
    <link href="css/estilo.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script>
    function validarFormulario() {
        let nombres = document.forms["encuestaForm"]["txtNombres"].value.trim();
        let dni = document.forms["encuestaForm"]["txtDNI"].value.trim();

        if (nombres === "") {
            alert("Por favor, ingrese su nombre y apellido.");
            return false;
        }

        if (dni === "" || dni.length !== 8 || isNaN(dni)) {
            alert("El DNI debe tener 8 dígitos numéricos.");
            return false;
        }

        return true;
    }
    </script>
</head>

<body>
    <header id="logo">
        <?php include 'encabezado.php'; ?>
    </header>
    <br />
    <br />
    <section id="preguntas">
        <form name="encuestaForm" method="POST" action="pregunta1.php" onsubmit="return validarFormulario();">
            <div class="contenedor">
                <table width="700" cellspacing="10" cellpadding="5">
                    <tr>
                        <td><label for="txtNombres">Nombres y apellidos:</label></td>
                        <td><input type="text" class="cuadro" id="txtNombres" name="txtNombres" size="50" /></td>
                    </tr>
                    <tr>
                        <td><label for="txtDNI">Número DNI:</label></td>
                        <td><input type="text" class="cuadro" id="txtDNI" name="txtDNI" size="50" /></td>
                    </tr>
                    <tr>
                        <td>Empezar con la encuesta >>> </td>
                        <td>

                            <input type="submit" id="boton" value="Encuesta" />

                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </section>

    <footer id="pie">
        <?php include 'pie.php'; ?>
    </footer>
</body>

</html>