<?php

//usar namespace quando precisa dar extend mas o arquivo nao esta na mesma pasta
//usar name space para o config extender o path ate onde o arquivo esta
namespace Cliente;

class Cadastro extends \Cadastro
{
    public function registrarVenda()
    {
        echo "Foi registrada uma venda para o cliente " . $this->getNome();
    }
}
