<?php

//convertendo os valores para uma string
function soma(int ...$valores):string{
  return array_sum($valores);
}

echo soma(2, 2);
