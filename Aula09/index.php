<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Aula 09 - POO</title>
</head>
<body>
    <?php 
    class conta {
        public $cpf;
        public $nometitular;
        public $saldo = 0;


        public function sacar(float $valorSaque): void {
            if ($valorSaque > $this->saldo) {
                echo "saldo indisponível";
            }else{
                $this->saldo -= $valorSaque;
            }
        }

        public function depositar(float $valorDeposito) : void {
            if ($valorDeposito < 0) {
                echo "Deposite um valor maior que 0";
            }else {
                $this->saldo += $valorDeposito;
            }
        }

        public function verSaldo (){
            echo "$this->saldo";
        }
    }

    $contaCliente = new conta();
    $contaCliente->cpf = "00000";
    $contaCliente->nometitular = "Joao";
    $contaCliente->saldo = 1000;
        
    /*
    var_dump($conta1->saldo);
    var_dump($conta1->nometitular);
    var_dump($conta1->cpf);
    */

    

    ?>

    <main>
        <section>
        <?php 
          echo "<h1>Bem vindo $contaCliente->nometitular!</h1>";
          echo "<section>Seu saldo atual é: <h2>$contaCliente->saldo</h2></section>";

        ?>
        <button id="sacar">Sacar</button>
        <button id="depositar">Depositar</button>
        </section>
       
    </main>
    




</body>
</html>