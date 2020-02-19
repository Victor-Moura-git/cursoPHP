<?php

//session_id('m26tw4e2qxnhm9ehvd7smfi0ndeh1gs5');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION['nome']);
