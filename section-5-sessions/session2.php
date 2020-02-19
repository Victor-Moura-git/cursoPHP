<?php

require_once("config.php");

session_unset($_SESSION['nome']);

echo $_SESSION['nome'];

//destroi o acesso do usuario
session_destroy();
