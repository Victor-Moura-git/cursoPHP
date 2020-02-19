<?php

//classes: assuntos criados para organizar o codigo
//->atributos: "variaveis"
//->metodo: "funcoes"

//instancia a classe => objeto
//objeto: variavel que representa uma classe

class Pessoa
{
    public $nome; //Atributo: Esta fora de um metodo, pode ser chamado normalmente

    public function falar()
    {   //Metodo
    //$this: objeto (representacao da classe Pessoa)
    return "O meu nome eh " . $this->nome; //Atributo: Esta dentro de um metodo, precisa ser chamado com $this
    }
}

//objeto =  representa uma classe
$glaucio = new Pessoa();
$glaucio -> nome = "Glaucio Daniel";
echo $glaucio -> falar();
