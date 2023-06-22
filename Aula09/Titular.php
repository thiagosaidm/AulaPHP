<?php 

class Titular{
    // Atributos devem ser privados para respeitar e evitar danos as regras de negócio

    private readonly string $nomeTitular; // Readonly, deve ser escrita dentro do escopo da classe, além disso não permite alterar o seu valor
    private readonly string $cpfTitular;

    public function __construct(string $cpfTitular,string $nomeTitular)
    {   
        $this->validaCpf($cpfTitular);
        $this->cpfTitular = $cpfTitular; PHP_EOL;
        $this->validaNome($nomeTitular);
        $this->nomeTitular= $nomeTitular; PHP_EOL;
    }

    public function recuperaCpf() : string
    {
        return $this->cpfTitular;
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

    private function validaNome(string $nomeTitular){
        if (strlen($nomeTitular) < 3) {
            echo "<section>
            <h1>Nome INVÁLIDO</h1>
            <h2>Por favor, digite um nome válido</h2>
            </section>";
            exit();
        }

    }

}



?>