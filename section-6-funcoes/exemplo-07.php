<?php

//criando um array na funcao e somando os valores
function soma(int ...$valores){
  return array_sum($valores);
}

echo soma(2, 2);
