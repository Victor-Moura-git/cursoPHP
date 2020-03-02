<?php

$conn = new PDO("mysql:host=localhost:3307;dbname=dbphp7", "root", "root");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "jose";
$password = "1234567890";

$stmt -> bindParam(":LOGIN", $login);
$stmt -> bindParam(":PASS", $password);

$stmt->execute();

echo "INSERIDO!";
