<?php

    $HOST = "localhost";
    $DB = "dbloja";
    $LOGIN = "Senac";
    $SENHA = "123456";

    mysqli_connect($HOST,$DB,$LOGIN,$SENHA);

    if(mysqli_connect_errno()){
        echo "Erro ao conectar banco de dados" . mysqli_connect_error();
    }else{
        echo "Banco de dados conectado.";
    }

?>