<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quanto Anos vc tem?</title>
</head>
<body>
    <?php 
    $anoAtual = date("Y");
    $anonascimento = $_GET["anonascimento"] ?? 2000;
    $anoconsulta = $_GET["anoconsulta"] ?? $anoAtual;
    ?>


    <main>
        <h1>Calculo de Idade</h1>

        <p>Digite a sua idade para saber</p>

        <form action="<?$_SERVER['PHP_SELF']?>" method="get">
        <label for="anonascimento">Digite o Ano que você nasceu</label>
        <input type="number" name="anonascimento" id="anonascimento" maxvalue="<?$anoAtual-1?>" value="<?=$anonascimento?>">
        <label for="anoconsulta">Qual a sua idade no ano...?</label>
        <input type="number" name="anoconsulta" id="anoconsulta" value="<?=$anoconsulta?>">

        <input type="submit" value="Calcular">

        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
        if ($anonascimento >= $anoAtual) {
            echo "<p>Você deve digitar um valor menor que $anoAtual</p>";
        }
           $resultado = $anoconsulta - $anonascimento;
        
        echo "<p>Quem nasceu em $anonascimento tem $resultado anos! </p>";

        ?>
    </section>

</body>
</html>