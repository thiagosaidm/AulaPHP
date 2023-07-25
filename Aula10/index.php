<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        

    <?php 

        $teste= md5("Thiago");
        
        echo $teste;

        //Array
            #é possível criar arrays de 3 maneiras no Php

            #dessa forma estou indexando os valores, com a chave para cada um

            $carros = array(0=>"Fiat Uno", 2=>"Pajero TR4", 3=>"Fox");

            #o indice será gerado automaticamente
            $motos = array();

            $motos[] = "Kawasaki Ninja";
            $motos[] = "Hornet";
            $motos[] = "Broz";

            $personagens = ["Ichigo", "Goku","Naruto"];
            print_r($personagens);
        
            #mostrando quantidade

            //count
            $totalpersonagens = count($personagens);
            echo $totalpersonagens;


    
    
    ?>
</body>
</html>