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

     $divd =  $_GET ['dividendo'] ?? 1;
     $divs =  $_GET ['divisor'] ?? 1;

    ?>
    <main>
        <h1>Desafio:05 - Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
        <label for="dividendo">Dividendo</label>
        <input type="number" name="dividendo" id="dividendo" value=<?=$divd?>>
        <label for="divisor">Divisor</label>
        <input type="number" name="divisor" id="divisor" value=<?=$divs?>>
        <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
        $quociente = $divd / $divs;
        $resto = $divd%$divs;

        echo "<p>O <strong>Dividendo</strong> é $divd <br>
                 O <strong>Divisor</strong> é $divs <br>
                 O <strong>Quociente é $quociente</strong><br>
                 O <strong>Resto é $resto</strong>   
                 </p>"

        ?>
    </section>
    
</body>
</html>