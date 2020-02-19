<?php

//subrotina (sem return)
function ola(){
  echo "Ola mundo!";
}

//funcao (com return)
function ola2(){
  return "Ola mundo!";
}

ola();

//echo ola2();
$frase = ola2();
echo $frase;
