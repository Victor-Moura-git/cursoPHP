<?php

//variavel constante
define("SERVIDOR", "127.0.0.1");

echo SERVIDOR;

//array constante
define("BANCO_DE_DADOS", [
    "127.0.1",
    "root",
    "password",
    "test"
], true); //true para case insensitive

print_r(BANCO_DE_DADOS);

//versao do php
echo PHP_VERSION . "<br>";

echo DIRECTORY_SEPARATOR;
