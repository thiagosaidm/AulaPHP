    <?php 

    require_once './Titular.php';

    class conta {
        private $titular;
        private $tipodeConta;
        private $saldo;
        //Método Estático: é um método ou atributo da Classe, no qual não é necessário atribuir sempre que for criado uma nova instância
        private static $codigoBanco = 33394;

        #metodo construtor do PHP, ele permite setar e dar obrigatoriedade de atributos já na hora da criação de uma instancia de objeto
        public function __construct(Titular $titular)
        {   
            $this->titular = $titular;
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


        public function mostrarCodigoBanco (): int{
            //self é como se fosse o This da classe, se refere a chamada de um atributo ou método da propria Classe
            return self ::$codigoBanco;
        }
      
    }

    ?>

    




</body>
</html>