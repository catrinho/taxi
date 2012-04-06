<?php
include 'class/caminhos.php';
include 'class/percurso.php';
include 'class/calcula.php';
include 'class/cidades.php';
include 'class/database.php';
include 'class/tela.php';
$objPercurso = new Percurso($_POST['origem'], $_POST['destino'], $_POST['cidade']);
$objTela = new Tela();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>rapido.taxi.br</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div align="center" class="atencao"><a href="index.php"><img src="img/logo.png" alt="taxi" border="0" /></a><br></div>
        <br>
        <div id="resultado">
            <?php
                if($_POST['origem'] != "" OR $_POST['destino'] != "") {
            echo '<div class="titulo_lugar">Origem:</div>
                    <div id="lugar_origem">'.$_POST[origem].'</div>
                    <div class="titulo_lugar">Destino:</div>
                    <div id="lugar_destino">'.$_POST[destino].'</div>';
                    echo $objTela->mostraResultado($objPercurso);
                } else {
                    echo "<br><div align='center' class='atencao'>Por favor preencha a origem e destino.</font></div><br>";
                }
            ?>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>
