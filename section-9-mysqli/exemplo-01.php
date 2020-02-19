<?php

$conn = new mysqli("localhost:3307", "root", "root", "dbphp7");

if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}

//Os valores da interrogacao serao substituidos por valores que ainda serao escritos
//Aqui esta sendo usado um metodo ja definido pela classe mysqli
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

//aqui passa o tipo de dado, no caso s = string e sao passados os valores
$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stmt->execute();

$login =  "root";
$pass = "penacho";

$stmt->execute();
