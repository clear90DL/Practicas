<?php
session_start();
$_SESSION['pregunta5'] = $_POST['preg5'];
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title></title>
<link href="css/estilo.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <header id="logo">
        <?php include 'encabezado.php'; ?>
        <h3>INFORME DE ENCUESTA</h3>
    </header>
    <?php
    $nombres = $_SESSION['nombres'];
    $dni = $_SESSION['dni'];
    $pregunta1 = $_SESSION['Pregunta1'];
    $pregunta2 = $_SESSION['Pregunta2'];
    $pregunta3 = $_SESSION['Pregunta3'];
    $pregunta4 = $_SESSION['Pregunta4'];
    $pregunta5 = $_SESSION['Pregunta5'];
    ?>
    <section id="preguntas">
        <form method="POST" action="resumen.php">
            <div class="contenedor">
                <table width="900" cellspacing="10" cellpadding="0">
                    <tr>
                        <td class="table-dat"
                            style="background-color: Orange; padding: 5px; margin:10px; text-align: center; vertical-align: middle;">
                            Nombre del ciudadano</td>
                        <td class="table-dat"
                            style="background-color: Orange; padding: 5px;margin:10px; text-align: center; vertical-align: middle;">
                            <?php echo $nombres; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-dat"
                            style="background-color: LightGray; padding: 5px; text-align: center; vertical-align: middle;">
                            DNI</td>
                        <td class="table-dat"
                            style="background-color: LightGray; padding: 5px; text-align: center; vertical-align: middle;">
                            <?php echo $dni; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>¿Cómo se siente a nivel de seguridad en la ciudad de Lima?
                        </td>
                        <td><?php echo $pregunta1; ?></td>
                    </tr>
                    <tr>
                        <td>¿Qué tipo de delito cree usted que es el más
                            común en su zona de residencia?</td>
                        <td><?php echo $pregunta2; ?></td>
                    </tr>
                    <tr>
                        <td>¿Generalmente que día cree usted que ocurre
                            más incidencias?</td>
                        <td><?php echo $pregunta3; ?></td>
                    </tr>
                    <tr>
                        <td>¿Cuál que usted que deben ser las medidas que las
                            autoridades deben aplicar para combatir estas
                            incidencias?</td>
                        <td><?php echo $pregunta4; ?></td>
                    </tr>
                    <tr>
                        <td>¿Usted conoce las medidas que implementa la policía
                            del Perú para disminuir la delincuencia?</td>
                        <td><?php echo $pregunta5; ?></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="< Anterior" onclick="this.form.action = 'pregunta5.php'" />
                            <input type="submit" value="Volver a encuestar" onclick="this.form.action = 'index.php'" />
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