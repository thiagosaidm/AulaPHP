<?php 

require_once './Conta.php';
require_once './Titular.php';



$conta001 = new conta(new Titular("12345689711","Thiago Said"));

$conta001->depositar(5000);
$conta001->sacar(10);




?>