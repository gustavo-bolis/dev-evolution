<?php
//
//Crie uma classe "Funcionario" que herda da classe "Pessoa" e adicione uma propriedade "salario".
//Instancie um objeto da classe "Funcionario" e atribua valores às propriedades.
//
//Adicione mais métodos e propriedades que você acha necessário.

require_once "EX1.php";
class funcionario extends pessoa{
    private $salario;
    private $chinelo;

    /**
     * @param $salario
     */
    public function __construct($nome, $idade, $sexo,$salario, $chinelo)
    {
        parent::__construct($nome, $idade, $sexo);
        $this->salario = $salario;
        $this->chinelo = $chinelo;
    }

    /**
     * @return mixed
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * @return mixed
     */
    public function getChinelo()
    {
        return $this->chinelo;
    }


}
    $kleber = new funcionario("kleber",6,"sim",100,true);
    $gertrudes = new funcionario("chinelinho",66,"Feminino",1500, false);

    if ($kleber->getChinelo() ){
        echo $kleber->get_nome() . "com salário de: ". $kleber->getSalario() ." pode usar chinelo".PHP_EOL;
    } else {
        echo $kleber->get_nome() . "com salário de: ". $kleber->getSalario() . " NÃO pode usar chinelo".PHP_EOL;
    }

    if ($gertrudes->getChinelo() ){
        echo $gertrudes->get_nome() . "com salário de: ". $gertrudes->getSalario() ." pode usar chinelo".PHP_EOL;
    } else {
        echo $gertrudes->get_nome() . "com salário de: ". $gertrudes->getSalario() . " NÃO pode usar chinelo".PHP_EOL;
    }

?>