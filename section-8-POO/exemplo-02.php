<?php

class Carro
{
    private $modelo;
    private $motor;
    private $ano;

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        //objeto que instancia a classe
        //atributo recebe o valor do parametro
        $this->modelo = $modelo;
    }

    public function getMotor():float
    {
        return $this->motor;
    }

    public function setMotor($motor)
    {

    //atributo recebe o valor do parametro
        $this->motor = $motor;
    }

    public function getAno():int
    {
        return $this->ano;
    }

    public function setAno($Ano)
    {

    //atributo recebe o valor do parametro
        $this->ano = $Ano;
    }

    public function exibir()
    {
        return array(
      "modelo"=>$this->getModelo(),
      "motor"=>$this->getMotor(),
      "ano"=>$this->getAno()
    );
    }
}

//instanciando uma classe (objeto)
$gol = new Carro();
//$gol -> modelo = "Gol GT"; Nao pode acessar uma propriedade privada
$gol -> setModelo("Gol GT");
$gol -> setMotor("1.6");
$gol -> setAno("2017");

var_dump($gol -> exibir());
