<?php

$pessoa = array(
  'nome' => "Joao",
  'idade' => 20
);

//se nao passar o endereco so muda o array dentro do for
foreach ($pessoa as &$value) {
    if (gettype($value) == 'integer') {
        $value += 10;
    }

    echo $value . "<br>";
}

print_r($pessoa);
