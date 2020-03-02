<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$filename = "fiu.png";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $filenfo->file($filename);

$base64encode =  "data:" . $mimetype . ";base64," . $base64;

?>

<a href="<?=$base64encode?>" target="_blank">Link para imagem</a>

<img src="<?=$base64encode?>"> 
