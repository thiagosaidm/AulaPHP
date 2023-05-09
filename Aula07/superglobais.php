<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">

</head>
<body>

        <pre>
        <?php 
            echo "<p>São variáveis predefinidas disponíveis em todo escopo do script</p>";
            //A superglobal GET
            echo "<h1>Superglobal GET</h1>";
            var_dump($_GET);
            //Vai mostrar num array os parametros da URL (query string)
            ?>
      
        </pre>
        
          
    
</body>
</html>