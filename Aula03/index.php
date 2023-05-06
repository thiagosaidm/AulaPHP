<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP🐘</h1>
    <h2>Manipulação de Strings</h2>
    <p>As principais diferenças entre Double Quoted, Single Quoted, e </p>

    <?php 
        $name = "Thiago";

        echo " Usando double quoted: Meu nome é $name. <br>" ;
        
        echo ' Usando single quoted: meu nome é $name';

        echo "<br> 
        <p>No uso de <b>double quoted</b>, existe a interpretação do conteúdo.<br> Já no da <b>single quoted</b>, o conteúdo é mostrado
        como foi escrito</p>";

    
    ?>
</body>
</html>