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
        // Atributos devem ser privados para respeitar e evitar danos as regras de negócio

        public $nometitular;
        private $saldo = 0;
        private $cpfTitular;
        private $tipodeConta;

        // Já os métodos podem ser publicos para usabilidade do usuário
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

        public function definirNome(string $nome): void
        {
            $this-> nometitular = $nome;
          
        }

        public function definirCpf(string $cpfTitular): void
        {
            $this->cpfTitular = $cpfTitular;
        }

        public function recuperaCpf() : string
        {
            return $this->cpfTitular;
        }
        
        public function mostrarSaldo(): string
        {
            $saldoFormatado = number_format($this->saldo,2, ',','.');
            return 'R$' . $saldoFormatado;
        }

        public function definirTipodeConta(string $tipodeConta): void
        {
            $this->tipodeConta = $tipodeConta;
        }

        public function mostrarTipodeConta(): string
        {
            return $this->tipodeConta;
        }
      
    }

    $contaCliente = new Conta();

    $contaCliente->definirNome("Thiago");

    $contaCliente->definirCpf("15664848");

    $contaCliente->depositar(5000);

    $contaCliente->definirTipodeConta("CC");

    ?>

    <main>
        <section>
        <?php 
          echo "<h1>Bem vindo $contaCliente->nometitular!</h1>";
          echo "<p>Cpf: " .$contaCliente->recuperaCpf(). "</p>"; //chamando função no HTML
          echo "<p>Tipo de Conta: " .$contaCliente->mostrarTipodeConta(). "</p>";
          echo "<h3>Seu Saldo Atual: " .$contaCliente->mostrarSaldo(). "</h3>"; //chamando função no HTML

        ?>
        <button id="sacar">Sacar</button>
        <button id="depositar">Depositar</button>
        </section>
       
    </main>
    




</body>
</html>