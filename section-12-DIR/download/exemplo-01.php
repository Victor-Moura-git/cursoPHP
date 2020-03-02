<?php

$link = "D:\Victor\MAMP\htdocs\Curso-PHP\section-12-DIR\FGETS\usuarios.csv";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>
