<?php

require_once("config.php");

echo session_save_path();

var_dump(session_status());

switch(session_status()){
  case PHP_SESSION_DISABLED;
  echo "Sessoes desabilitadas";
  break;

  case PHP_SESSION_NONE;
  echo "Habilitadas, mas nao existem";
  break;

  case PHP_SESSION_ACTIVE;
  echo "Uma sessao existe";
  break;
}
