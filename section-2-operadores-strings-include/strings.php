<?php

$nome = "penacho albino";

//transformar texto para letras maiusculas
echo strtoupper($nome);
echo strtolower($nome);

//so as primeiras letras
echo ucfirst($nome);
echo ucwords($nome);

//trocando elementos
$empresa = "Hcode";
$empresa = str_replace("o", "0", $empresa);

echo $empresa;

//procurando elementos(retorna a posicao da palavra)
$frase = "<br>A repeticao eh a mae da retencao.";
$palavra = "mae";
$q =  strpos($frase, $palavra);
echo $q;

//printing a text from 0 to $q characters (ate $q)
$texto = substr($frase, 0, $q);
echo $texto . "<br>";
//procurando um texto a partir de $q+tamanho da palavra mae ate o final da frase
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase)-$q);
$texto2 = substr($frase, $q, strlen($palavra));
echo $texto2;
