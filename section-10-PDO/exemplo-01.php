<?php

$conn = new PDO("mysql:dbname=dbphp7; host=localhost:3307", "root", "root");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//assim
foreach ($results as $row) {
    foreach ($row as $key=>$value) {
        echo "<strong>" . $key . ":</strong>" . $value . "<br>";
    }

    echo "<hr>";
}

//ou assim
echo json_encode($results);

//var_dump($results);
