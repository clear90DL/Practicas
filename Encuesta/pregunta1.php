<?php
session_start();
$nombres = $_SESSION['nombres'] ?? 'Nombre no disponible';
$dni = $_SESSION['dni'] ?? 'DNI no disponible';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/estilo.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <header id="logo">
        <?php include 'encabezado.php'; ?>
    </header>
    <section id="preguntas">
        <form method="POST" action="pregunta1.php">
            <div class="contenedor">
                <table width="700" cellspacing="10" cellpadding="0">
                    <tr>
                        <th colspan="2"
                            style="background-color: LightGray; padding: 5px; text-align: center; vertical-align: middle;">
                            ¿Cómo
                            siente usted el nivel
                            de seguridad en la ciudad de Lima?
                        </th>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="radio" name="preg1" value="Muy inseguro" />Muy inseguro<br />
                            <input type="radio" name="preg1" value="Algo inseguro" />Algo inseguro<br />
                            <input type="radio" name="preg1" value="Algo seguro" />Algo seguro<br />
                            <input type="radio" name="preg1" value="Muy seguro" />Muy seguro
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="< Anterior" onclick="this.form.action='index.php'" />
                            <input type="submit" value="Siguiente >" onclick="this.form.action='pregunta2.php'" />
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