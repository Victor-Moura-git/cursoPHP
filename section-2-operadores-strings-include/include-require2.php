<?php

#include permite incluir arquivos de sites de terceiro
//include "includes/include-require.php";
require "includes/include-require.php";

#para nao ter o risco de chamar a funcao duas vezes
require_once "includes/include-require.php";
include_once "includes/include-require.php";

$resultado = somar(10, 20);

echo $resultado;
