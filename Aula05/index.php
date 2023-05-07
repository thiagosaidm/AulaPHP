<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Operadores Aritiméticos</h1>

    <section>
        <h2>Ordem de procedência</h2>
        <ol>
            Segue a ordem de procedência dos operadores aritiméticos
            <li>( )</li>
            <li>** : potência</li>
            <li>* , / e %</li>
            <li>+ e -</li>
           
        </ol>
    </section>
    
    <?php 
    $resultado1 = 5 + 2 / 2;
    echo "o resultado é $resultado1";

    $resultado2 = 50 / 2 + 3 ** 2;
    echo "<br> o resultado é $resultado2 <br>";

    $resultado3 = 50 / (2 + 3) ** 2;
    echo "Caso a equação esteja entre parênteses, é feita primeira a resolução do que está entre eles, o resultado do mesmo calculo então fica<br>
    $resultado3
    ";
    

    ?>
    
</body>
</html>