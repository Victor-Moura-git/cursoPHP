<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form>
      <input type="text" name="nome">
      <input type="date" name="nascimento">
      <input type="submit" name="submit" value="OK">
    </form>
  </body>
</html>

<?php

foreach ($_GET as $key => $value) {
    echo "Nome do campo: " . $key . "<br>";
    echo "Valor do campo: " . $value;
    echo "<hr>";
}

 ?>
