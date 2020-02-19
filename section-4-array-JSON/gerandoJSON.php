<?php

$pessoas = array();

array_push($pessoas, array(
  'nome' => 'Joao',
  'idade' => 20
));

array_push($pessoas, array(
  'nome' => 'Glaucio',
  'idade' => 25
));

//gerando JSON a partir do array
echo json_encode($pessoas);
