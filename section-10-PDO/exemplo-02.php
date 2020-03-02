<?php

//so muda a string de conexao
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\BENKOS", "sa", "root");

echo "dfdsf";

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
