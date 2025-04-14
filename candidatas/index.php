<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/estilo.css" rel="stylesheet">
</head>

<body>
    <header>
        <h3 id="centrado">VOTACION DE CANDIDATAS</h3>
        <h2 id="titulo">REYNA DE PRIMAVERA 2015</h2>
    </header>
    <section>
        <?php
        error_reporting(0);
        session_start();
        $total = $_SESSION['total'] ?? 0;

        if ($total > 0) {
            $pcandidata1 = ($_SESSION['candidata1'] * 100) / $total;
            $pcandidata2 = ($_SESSION['candidata2'] * 100) / $total;
            $pcandidata3 = ($_SESSION['candidata3'] * 100) / $total;
            $pcandidata4 = ($_SESSION['candidata4'] * 100) / $total;
        } else {
            $pcandidata1 = $pcandidata2 = $pcandidata3 = $pcandidata4 = 0;
        }
        ?>
        <form name="frmVotacion" method="POST" action="conteo.php">
            <table border="1" width="600" cellspacing="10" cellpadding="1">
                <tr>
                    <td id="centrado"><img src="img/emilia.jpg" /></td>
                    <td id="centrado"><img src="img/Jenifer.jpg" /></td>
                </tr>
                <tr>
                    <td id="centrado">Emilia Clarke 19 años <br>
                        <input type="submit" value="Votar" name="btnBoton1" /><br>
                        TOTAL DE VOTOS: <?php echo $_SESSION['candidata1']; ?><br>
                        PORCENTAJE DE VOTOS: <?php echo round($pcandidata1, 2); ?>%
                    </td>
                    <td id="centrado">Jennifer Connelly 22 años<br>
                        <input type="submit" value="Votar" name="btnBoton2" /><br>
                        TOTAL DE VOTOS:<?php echo $_SESSION['candidata2']; ?><br>
                        PORCENTAJE DE VOTOS:<?php echo round($pcandidata2, 2); ?>%
                    </td>
                </tr>
                <tr>
                    <td id="centrado"><img src="img/scarlet.jpg" /></td>
                    <td id="centrado"><img src="img/Lawerse.jpg" /></td>
                </tr>
                <tr>
                    <td id="centrado">Scarlett Jonansson 20 años<br>
                        <input type="submit" value="Votar" name="btnBoton3" /><br>
                        TOTAL DE VOTOS:<?php echo $_SESSION['candidata3']; ?><br>
                        PORCENTAJE DE VOTOS:<?php echo round($pcandidata3, 2); ?>%
                    </td>
                    <td id="centrado">Jennifer Lawrence 21 años<br>
                        <input type="submit" value="Votar" name="btnBoton4" /><br>
                        TOTAL DE VOTOS: <?php echo $_SESSION['candidata4']; ?><br>
                        PORCENTAJE DE VOTOS:<?php echo round($pcandidata4, 2); ?>%
                    </td>
                </tr>
            </table>
        </form>
        <?php
        $arreglo = array(
            'Emilia Clarke' => $_SESSION['candidata1'],
            'Jennifer Connelly' => $_SESSION['candidata2'],
            'Scarlett Jonansson' => $_SESSION['candidata3'],
            'Jennifer Lawrence' => $_SESSION['candidata4']
        );
        arsort($arreglo);
        $candidata = array_key_first($arreglo);
        $puntaje = $arreglo[$candidata];
        ?>
        <table border="1" width="600" cellspacing="10" cellpadding="1">
            <tr>
                <td id="ganadora">TOTAL DE VOTANTES:
                    <?php echo $_SESSION['total']; ?>
                </td>
            </tr>
            <tr>
                <td id="ganadora">GANADORA:<?php echo $candidata; ?>
                    (<?php echo $puntaje; ?> votos)
                </td>
            </tr>
        </table>
    </section>
    <footer id="pie">
        <h5 id="centrado">Todos los derechos reservados @2015
            Diseñado por M@nuel Torres</h5>
    </footer>
</body>

</html>