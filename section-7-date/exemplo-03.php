<?php

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo date("d/m/Y H:i:s");

echo ucwords(strftime("%A %B"));
