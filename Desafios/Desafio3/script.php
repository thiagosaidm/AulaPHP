<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Aula04/style.css">
    <title>Document</title>
</head>
<body>
<header>
    <h1>Resultado</h1>
    </header>
    <main>
        <?php 
            $numero = $_GET["numero"];
            $emDolar = round($numero/4.95,2);
            

            echo "<p>$numero reais equivale a $emDolar doláres
            </p>";
            
        ?>
    </main>

</body>
</html>