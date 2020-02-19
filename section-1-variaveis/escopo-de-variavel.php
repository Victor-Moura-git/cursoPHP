<?php
$nome = "Glaucio";

//dentro da funcao a variavel $nome nao existe
function teste()
{
    global $nome;
    echo $nome;
}

//uma funcao nao afeta a outra, o "global" so funciona na primeira funcao
function teste2()
{
    echo $nome;
}

teste();
teste2();
