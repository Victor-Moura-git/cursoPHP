<form method="post" enctype="multipart/form-data">
  <input type="file" name="fileUpload" value="">
  <button type="submit">Send</button>
</form>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"] === "POST"){

  $file = $_FILES["fileUpload"];

  if($file["error"]){
    throw new Exception("Error Processing Request: " . $file["error"]);

  }

  $dirUploads = "uploads";

  if(!is_dir($dirUploads)){
    mkdir($dirUploads);
  }

  move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"]);

  echo "OK";
}

?>
