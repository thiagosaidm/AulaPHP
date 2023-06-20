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

        public readonly string $nometitular; // Readonly, deve ser escrita dentro do escopo da classe, além disso não permite alterar o seu valor
        private readonly string $cpfTitular;
        private $tipodeConta;
        private $saldo;
        //Método Estático: é um método ou atributo da Classe, no qual não é necessário atribuir sempre que for criado uma nova instância
        private static $codigoBanco = 33394;

        #metodo construtor do PHP, ele permite setar e dar obrigatoriedade de atributos já na hora da criação de uma instancia de objeto

        public function __construct(string $cpfTitular,string $nometitular)
        {   
            $this->validaCpf($cpfTitular);
            $this->cpfTitular = $cpfTitular; PHP_EOL;
            $this->validaNome($nometitular);
            $this->nometitular= $nometitular; PHP_EOL;
            $this->saldo = 0;
        }

        // Já os métodos podem ser publicos para usabilidade do usuário, porém para regras de negócio, é interessante mante-los privados
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

        public function transferirValores($valorTransferencia, $recebedor ): void
         {
            if ($valorTransferencia<= $this->saldo && $recebedor != "") {
                echo "Transferencia Realizada com sucesso";
            }else {
                echo "Saldo insuficiente";
            }
        }

        //biblioteca PCRE: É uma biblioteca que permite a manipulação de Strings usando expressões regulares.
        //São usadas para validação, busca, substituição e manipulação

        private function validaCpf($cpfTitular){
            // verifica se o numero de caracteres é diferente de 11
            if (strlen($cpfTitular) !== 11) {
                echo "<section>
                <h1>CPF INVÁLIDO</h1>
                <h2>O cpf precisa ter 11 dígitos</h2>
                </section>";
                exit();
            };
            //verifica se todos os digitos são iguais
            //A expressão '/(\d)\1{10}/': d captura o digito \1 é o grupo de captura e {10} vê se ele se repete 10x
            if (preg_match('/(\d)\1{10}/', $cpfTitular)) {
                echo "<section>
                <h1>CPF INVÁLIDO</h1>
                <h2>Por favor, digite um cpf válido para continuar</h2>
                </section>";
                exit();
            };



        }

        private function validaNome(string $nometitular){
            if (strlen($nometitular) < 3) {
                echo "<section>
                <h1>Nome INVÁLIDO</h1>
                <h2>Por favor, digite um nome válido</h2>
                </section>";
                exit();
            }

        }

        public function mostrarCodigoBanco (): int{
            //self é como se fosse o This da classe, se refere a chamada de um atributo ou método da propria Classe
            return self ::$codigoBanco;
        }
      
    }

    $contaCliente = new Conta('01656001446', 'Thiago');

    $contaCliente->depositar(10000);

    $contaCliente->definirTipodeConta("CC");


    ?>

    <main>
        <section>
        <?php 
          echo "<h1>Bem vindo $contaCliente->nometitular!</h1>";
          echo "<p>Código Banco: " .$contaCliente->mostrarCodigoBanco(). "</p>"; //chamando função no HTML
          echo "<p>Cpf: " .$contaCliente->recuperaCpf(). "</p>"; //chamando função no HTML
          echo "<p>Tipo de Conta: " .$contaCliente->mostrarTipodeConta(). "</p>";
          echo "<p>Voce recebeu um depósito de <h2>R$5000,00</h2></p>";
          echo "<h3>Seu Saldo Atual: " .$contaCliente->mostrarSaldo(). "</h3>"; //chamando função no HTML
          

        ?>
        <button id="sacar">Sacar</button> <!-- Ao clicar abre uma opção para escolher o valor --->
        <button id="depositar">Depositar</button><!-- Ao clicar abre uma opção para escolher o valor --->
        <button id="transferir">Transferir</button> <!-- Ao clicar abre uma opção para escolher o valor --->
        </section>
       
    </main>
    




</body>
</html>