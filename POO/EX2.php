<?php

//Classe ContaBancaria
//
//    Crie uma classe chamada "ContaBancaria" com propriedades "saldo" e métodos "depositar" e "sacar".  Verifique se o valor a
// ser sacado é menor ou igual ao saldo antes de realizar o saque.
//
//Adicione mais métodos e propriedades que você acha necessário.
class ContaBancaria{
    private $saldo;

    public function __construct($initSaldo){
        $this->saldo = $initSaldo;
    }

    /**
     * @return mixed
     */
    public function getSaldo(){
        return $this->saldo;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        } else {
            return false;
        }
    }
}

$conta = new ContaBancaria(1000);

echo "Saldo inicial: " . $conta->getSaldo() . PHP_EOL;

$conta->depositar(500);
echo "Saldo após depósito de 500: ". $conta->getSaldo() . PHP_EOL;

if ($conta->sacar(200)) {
    echo "Saque de 200 realizado com sucesso. Saldo atual: " . $conta->getSaldo() . PHP_EOL;
} else {
    echo "Não foi possível realizar o saque de 200. Saldo insuficiente." . PHP_EOL;
}

if ($conta->sacar(2000)) {
    echo "Saque de 2000 realizado com sucesso. Saldo atual: " . $conta->getSaldo() . PHP_EOL;
} else {
    echo "Não foi possível realizar o saque de 2000. Saldo Disponível: " . $conta->getSaldo() . PHP_EOL;
}