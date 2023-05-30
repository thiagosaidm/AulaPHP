<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php 
            $salario = $_GET["valor"] ?? 0;
        ?>

    <main>
        <h1>Quantos salários você ganha? 🤑</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Salário(R$)</label>
            <input type="number" name="valor" id="valor" value="<?=$salario?>">
        </form>

    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            $minimo = 1320;
            $qtdSalario = (int)($salario/$minimo);
            $dif = $salario % $minimo;
          
            echo "<p>Você recebe $salario <br>Isso equivale a ganhar $qtdSalario salários mínimos + $dif reais</p>"
        ?>



    </section>
</body>
</html>