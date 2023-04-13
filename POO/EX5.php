<?php
//Crie uma classe chamada "Carro" com as propriedades privadas "marca", "modelo", "ano" e "velocidadeAtual".
//Implemente métodos públicos para obter e definir os valores dessas propriedades, bem como um método para acelerar o carro.
//
//Adicione mais métodos e propriedades que você acha necessário.
class Carro{
    private $marca;
    private $modelo;
    private $ano;
    private $velocidadeAtual;

    public function __construct($marca, $modelo, $ano, $velocidadeAtual)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->velocidadeAtual = $velocidadeAtual;
    }

    public function acelerar($velocidadeIncrement){
        $this->velocidadeAtual += $velocidadeIncrement;
    }

}