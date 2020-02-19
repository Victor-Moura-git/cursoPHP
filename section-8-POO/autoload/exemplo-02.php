<?php

//Todas as maneiras dao certo

function incluirClasse($nomeClasse)
{
    if (file_exists("$nomeClasse.php") == true) {
        require_once("$nomeClasse.php");
    }
    if (file_exists("abstratas" . DIRECTORY_SEPARATOR . "$nomeClasse.php") == true) {
        require_once("abstratas" . DIRECTORY_SEPARATOR . "$nomeClasse.php");
    }
}

spl_autoload_register("incluirClasse");

/*
function incluirClasse2($nomeClasse)
{
    if (file_exists("abstratas" . DIRECTORY_SEPARATOR . "$nomeClasse.php") == true) {
        require_once("abstratas" . DIRECTORY_SEPARATOR . "$nomeClasse.php");
    }
}

spl_autoload_register("incluirClasse2");
*/

/*
spl_autoload_register(
    function ($nomeClasse) {
        if (file_exists("abstratas" . DIRECTORY_SEPARATOR . "$nomeClasse.php") == true) {
            require_once("abstratas" . DIRECTORY_SEPARATOR . "$nomeClasse.php");
        }
    }
);
*/

$carro = new DelRey();

$carro->acelerar(80);
