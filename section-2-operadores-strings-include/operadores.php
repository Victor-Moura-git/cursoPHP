<?php

//operador de atribuicao
$nome = "Hcode";

//operador de concatenacao
echo $nome . " mais alguma coisa<br>";

//adicionar valores a uma variavel
$nome .= " Treinamentos<br>";
echo $nome;

//space chip comparator
$a = 35;
$b = 60;

//var_dump($a <=> $b);

/*Comparing Integers

    echo 1 <=> 1; //output  0
    echo 3 <=> 4; //output -1
    echo 4 <=> 3; //output  1

*/

//"??" comparator

$a = NULL;
$b = NULL;
$c = 10;

echo $a ?? $b ?? $c;
