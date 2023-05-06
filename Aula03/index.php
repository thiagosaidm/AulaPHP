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
        const SOBRENOME = "Soares";;
        echo " Usando double quoted: Meu nome é $name. <br>" ;
        
        echo ' Usando single quoted: meu nome é $name';

        echo "<br> 
        <p>No uso de <b>double quoted</b>, existe a interpretação do conteúdo.<br> Já no da <b>single quoted</b>, o conteúdo é mostrado
        como foi escrito</p>";

        echo "No caso de CONSTANTES, funciona de outra forma, elas sempre precisam ser usadas com CONCATENAÇÃO, pois
        como não usam $ para declarar a variável, são interpretadas como strings";

        echo "<br> Meu sobrenome é " . SOBRENOME;

        echo "<p> Quando usamos funções, elas seguem esse mesmo comportamento da constante, exemplo</p>";

        echo "Função data sem concatenação: Estamos no ano de date('Y') <br>";

        echo "Função data concatenada: Estamos no ano de " . date('Y');

        echo "<h4>Sequencia de Escape</h4>";

        echo "<p>Quando queremos mostrar dentro de uma string as aspas, é usado a sequncia de escape, reprensetado por
        barras e aspas simples, dessa forma:
        </p>";

        echo "$name \"thi \" " . SOBRENOME;
     





    
    ?>
</body>
</html>