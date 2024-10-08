<?php

$value = "Aluno";

setcookie ("Ocupacao", $value);
// Expira no final da sessão (Quando o browser fechar)//

setcookie ("Ocupacao", $value,time()+60);

echo $_COOKIE["Ocupacao"];
// Expira em 1 minuto //
?>