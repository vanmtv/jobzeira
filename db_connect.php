<?php

$servername = "us-cdbr-east-04.cleardb.com";
$username = "b1b365650f4624";
$password = "7c0cb235";
$db_name = "heroku_f84857fca49b4f1";

$connect = mysqli_connect($servername,$username,$password, $db_name);
mysqli_set_charset($connect,"utf8");

if(mysqli_connect_error()):
    echo "Erro na conexao: ".mysqli_connect_error();
endif;
?>