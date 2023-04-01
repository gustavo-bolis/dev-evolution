<?php
//Crie uma interface chamada "FormaGeometrica" com os métodos "calcularArea" e "calcularPerimetro".
//Implemente essa interface em duas classes: "Retangulo" e "Circulo".
//
//Adicione mais métodos e propriedades que você acha necessário.

interface FormaGeometrica{
    public function calcularArea();
    public function calcularPerimetro();
}

class Retangulo implements FormaGeometrica{
    private $base;
    private $altura;

    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }
    public function calcularArea() {
        return $this->base * $this->altura;
    }

    public function calcularPerimetro() {
        return 2 * ($this->base + $this->altura);
    }
    public function getBase(){
        return $this->base;
    }

    public function setBase($base){
        $this->base = $base;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

}

class Circulo implements FormaGeometrica{
    private $raio;

    public function __construct($raio){
        $this->raio = $raio;
    }

    public function calcularArea() {
        return M_PI * pow($this->raio, 2);
    }

    public function calcularPerimetro() {
        return 2 * M_PI * $this->raio;
    }

    public function getRaio(){
        return $this->raio;
    }

    public function setRaio($raio){
        $this->raio = $raio;
    }
}

$redondo = new Circulo(2);
echo "CIRCULO".PHP_EOL;
echo "Raio do Circulo: ". $redondo->getRaio(). PHP_EOL;
echo "Area do Circulo: ". number_format($redondo->calcularArea(), 2, '.',''). PHP_EOL;
echo "Perimetro do Circulo: ". number_format($redondo->calcularPerimetro(), 2, '.',''). PHP_EOL;
echo PHP_EOL."RETANGULO".PHP_EOL;
$retangulo = new Retangulo(4,2);
echo "Base do Retangulo: ". $retangulo->getBase(). PHP_EOL;
echo "Altura do Retangulo: ". $retangulo->getAltura(). PHP_EOL;
echo "Area do Retangulo: ". $retangulo->calcularArea(). PHP_EOL;
echo "Perimetro do Retangulo: ". $retangulo->calcularPerimetro(). PHP_EOL;
