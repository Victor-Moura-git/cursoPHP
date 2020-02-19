<?php

//gerando array a partir do JSON
$json = '
[
{
  "nome": "Joao",
  "idade": 20
},
{
  "nome": "Glaucio",
  "idade": 25
}
]
';

$data = json_decode($json, true);
print_r($data);
