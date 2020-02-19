<?php

//spl_autoload_extensions(".php"); // comma-separated list
//spl_autoload_register();

//require_once("DelRey.php");

function __autoload($nomeClasse){
  //var_dump($nomeClasse);
  require_once("$nomeClasse.php");
}

$carro = new DelRey();

$carro->acelerar(80);
