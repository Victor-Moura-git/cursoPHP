<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");

/* Assim tambem funciona
$penanche = $cad->Penacho();
echo $penanche;
*/

//metodo magico transforma em string, entao pode dar print no objeto
$cad->registrarVenda();
