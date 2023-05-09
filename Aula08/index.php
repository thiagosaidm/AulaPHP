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
    <!--Captura dos dados do form retroalimentado-->
    <?php 
        $valor1 = $_GET ['v1'] ?? 0; // ?? operador de qualecencia
        $valor2 = $_GET ['v2'] ?? 0; // 

    ?>

    <main>
        <!-- echo simplificado -->
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="somar">
        </form>
    </main>

    <section id="res"> 
        <h2>Resultado</h2>
        <?php 
          $soma = $valor1 + $valor2;
          echo "<h3> A soma entre $valor1 e valor $valor2 é:<br>
          
          <strong>$soma</strong>
          </h3>"
        ?> 
    </section>

</body>
</html>