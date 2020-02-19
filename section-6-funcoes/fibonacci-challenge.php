<?php

$n = 10;

function fibo($i)
{

  if($i == 1 || $i ==  2){
    return 1;
  }

  return fibo($i-1) + fibo ($i-2);
}


for($i=0 ; $i<$n ; $i++){
  echo fibo($i+1) . "<br>";
}
