<?php

$conn = new PDO("mysql:host=localhost:3307;dbname=dbphp7", "root", "root");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 8;

$stmt -> bindParam(":ID", $id);

$stmt->execute();

echo "DELETADO";
