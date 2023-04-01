<?php

//Crie uma classe chamada "Pessoa" com as propriedades "nome", "idade" e "sexo".
//Em seguida, instancie dois objetos dessa classe e atribua valores apropriados às propriedades.
//
//Adicione mais métodos e propriedades que você acha necessário.
class pessoa{
    private $nome;
    private $idade;
    private $sexo;

    private static $quantidade = 0;

    /**
     * @param $nome
     * @param $idade
     * @param $sexo
     */
    public function __construct($nome, $idade, $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        self::$quantidade++;
    }
    public function get_nome(){
        return $this->nome . PHP_EOL;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade . PHP_EOL;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo . PHP_EOL;
    }

    public static function getQuantidade() {
        return self::$quantidade;
    }


}

$nome = new pessoa("Kleber",6,"pouco");
$kleber = new pessoa("Não é o kleber",66,"Masculino");
echo $nome->get_nome();
echo $nome->getIdade();
echo $nome->getSexo();
echo "Kleber compra bolo".PHP_EOL;
echo $kleber->get_nome();
echo $kleber->getIdade();
echo $kleber->getSexo();

echo "Existem ". Pessoa::getQuantidade() ." Pessoa(s) Cadastradas".PHP_EOL;
?>