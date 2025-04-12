<?php
session_start();
$_SESSION['Pregunta3'] = $_POST['preg3'] ?? $_SESSION['pregunta3'] ?? null;

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
        <form method="POST" action="pregunta4.php">
            <div class="contenedor">

                <table width="700" cellspacing="10" cellpadding="0">
                    <tr>
                        <th colspan="2"
                            style="background-color: LightGray; padding: 5px; text-align: center; vertical-align: middle;">
                            ¿Cuál cree usted que deben ser las medidas
                            que las autoridades deben aplicar para
                            combatir estas incidencias?</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="radio" name="preg4" value="Mayor números de policías" />
                            Mayor números de policías<br />
                            <input type="radio" name="preg4" value="Mayor profesionalismo de las autoridades" />
                            Mayor profesionalismo de las autoridades<br />
                            <input type="radio" name="preg4" value="Aumentar las penas y que sean ejecutadas" />
                            Aumentar las penas y que sean ejecutadas<br />
                            <input type="radio" name="preg4" value="Nada" />Nada
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="< Anterior" onclick="this.form.action = 'pregunta3.php'" />
                            <input type="submit" value="Siguiente >" onclick="this.form.action = 'pregunta5.php'" />
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