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
    <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            $numero = $_GET["numero"];
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;

            echo "<p>O número digitado foi $numero <br>
            Seu <b>antecessor</b> é $antecessor <br>
            E seu <b>sucessor</b> é $sucessor!
            </p>"

        ?>
    </main>

</body>
</html>