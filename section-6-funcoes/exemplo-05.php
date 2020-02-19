<?php

//Passagem de parametro por referencia
//& = passagem de parametro por referencia (passa o endereco da variavel)

$a = 10;

function trocaValor(&$a)
{
    $a = 50;
    return $a;
}

echo trocaValor($a);
echo "<br>";
echo $a;
