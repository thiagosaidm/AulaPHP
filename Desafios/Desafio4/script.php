<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Document</title>
</head>
<body>
<header>
    <h1>Resultado</h1>
    </header>
    <main>
        <?php 
             date_default_timezone_set("America/Sao_Paulo");
             date("D/M/Y");
            // URL da API 
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%2705-02-2023%27&@dataFinalCotacao=%2705-09-2023%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra';

            $dados = json_decode(file_get_contents($url),true);


            $cotacao = $dados["value"][0]["cotacaoCompra"];


            $numero = $_GET["numero"];
            $emDolar = ($numero/$cotacao);
            $data = date("d/m/Y");

            echo "<p>$numero reais equivale a $emDolar doláres
            <p>A cotação do dolar está em $cotacao no dia de hoje $data </p>
            </p>";
      
        ?>
    </main>

</body>
</html>