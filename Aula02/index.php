<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Variáveis
    </h1>

    <?php 
        $nome = "Thiago";
        $sobrenome = "Soares";
        // Declarar o tipo de variável é necessário apenas no caso de constantes
        const PAIS = "Brasil";
        // O caso de constantes não é necessário o cifrão, ao usar numa string, basta fazer a interpolação com o ".";
        //São escritas com Uppercase;

        echo "Olá, meu nome é $nome $sobrenome e moro no " . PAIS;

        //regras para nomes de identificadores:
            // Variáveis sempre começam com $
            // O Segundo caracter pode ser letra ou _
            // Do terceiro em diante aceita [a-z], [A - Z ] e [_]
            // Podemos colocar qualquer simbolo e acentuados nos nomes da variável
            // Case Sensitive
            // palavras reservadas não podem ser usadas, como $this
    ?>
</body>
</html>