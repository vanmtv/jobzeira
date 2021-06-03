<?php

$servername = "localhost";
$username = "root";
$password = "q1w2e3r4";
$db_name = "jobzeira";

$connect = mysqli_connect($servername,$username,$password, $db_name);
mysqli_set_charset($connect,"utf8");

if(mysqli_connect_error()):
    echo "Erro na conexao: ".mysqli_connect_error();
endif;
?>