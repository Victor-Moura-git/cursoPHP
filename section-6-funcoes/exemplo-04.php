<?php

//coloca todos os parametros em um array
function ola()
{
    $argumentos = func_get_args();
    return $argumentos;
}

var_dump(ola("Bom dia", 10));
