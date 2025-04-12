<?php
session_start();
$_SESSION['pregunta4'] = $_POST['preg4'] ?? $_SESSION['pregunta4'] ?? null;

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
        <form method="POST" action="pregunta5.php">
            <div class="contenedor">
                <table width="700" cellspacing="10" cellpadding="0">
                    <tr>
                        <th colspan="2"
                            style="background-color: LightGray; padding: 5px; text-align: center; vertical-align: middle;">
                            ¿Usted conoce las medidas que implementa la
                            policía del Perú para disminuir la delincuencia?</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="radio" name="preg5" value="Si" />Si<br />
                            <input type="radio" name="preg5" value="No" />No<br />
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="< Anterior" onclick="this.form.action = 'pregunta4.php'" />
                            <input type="submit" value="Siguiente >" onclick="this.form.action = 'resumen.php'" />
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