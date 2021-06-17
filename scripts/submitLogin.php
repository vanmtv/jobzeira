<?php

include_once '../db_connect.php';

$sql = "SELECT `nome`,`email`, `senha`, `funcao`,`usuario_id` FROM `usuarios` WHERE `email`= '".$_POST['email']."' AND `senha` = '".$_POST['senha']."'";
    
$resultado = mysqli_query($connect,$sql);

/* PARA DEBUGAR 
$arrResult = array(     
        'result' => $sql
);          
*/

$user = mysqli_fetch_array($resultado);
    $arrResult = array(     
        'result' => $user
    );
    print json_encode($arrResult);
    die();
?>

