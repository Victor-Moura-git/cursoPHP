<?php
//variaveis pre-definidas ou arrays super globais

//Toda informacao que vem de get ou post eh string
//fazendo conversao
$nome = (int)$_GET["a"];

var_dump($nome);

//pegar ip do usuario
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;

//localizar qual pagina o usuario acessou
$ip2 = $_SERVER["SCRIPT_NAME"];
echo $ip2;


//"?" separa endereco e varial em uma url
//url eh dividido em varias partes
