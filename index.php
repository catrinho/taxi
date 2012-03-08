<?php
include 'class/database.php';
include 'class/cidades.php';
$cidades = new Cidades();
$bd = new Database();
$bd->connect();
$query = mysql_query("SELECT * FROM counter");
$total = mysql_fetch_array($query);
$novo = $total['visitas']+1;
mysql_query("UPDATE counter set visitas = $novo");
echo '<font size="-1" color="whitesmoke">'.$total['visitas'].'</font>';
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
            <form action="calcula.php" method="post">
                <div class="titulo_lugar">Origem:</div>
                <div id="lugar_origem"><input type="text" name="origem" class="login_textbox" /></div>
                <div class="titulo_lugar">Destino:</div>
                <div id="lugar_destino"><input type="text" name="destino" class="login_textbox" /></div>
                <div class="titulo_lugar">
                    <select name="cidade" class="login_combo">
                        <?php $cidades->comboCidades(); ?>
                    </select>
                </div>
                <div id="botao">
                    <div id="botao_fake">
                        <input type="submit" value="Calcular corrida" class="login_botao" />
                    </div>
                </div>
            </form>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>
<?php
//mysql_close();
?>