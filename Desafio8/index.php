<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <main>
    <h1>Bem vindo!</h1>
    <h2>Preencha seus dados para continuar!</h2>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <label for="name">Seu nome</label>
    <input type="text" name="name" id="name" maxlength="10">
    <label for="age">Idade</label>
    <input type="number" name="age" id="age"> 
    <label>
        <input type="radio" name="genero" value="masc">
        Masculino
    </label>
    <label>
        <input type="radio" name="genero" value="femi">
        Feminino
    </label>
    <input type="submit" value="Enviar">
    


    </form>

 </main>
</body>
</html>