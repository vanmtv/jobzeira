<?php

include_once '../db_connect.php';

$sql = "INSERT INTO `anuncios`(`servico_id`,`titulo`, `profissional_id`, `valor`, `descricao`, `foto_path`) VALUES (" 
    . $_POST['servico'] . ",'" . $_POST['titulo']. "',". $_POST['profissional'] ."," . $_POST['valor'] . ",'" . $_POST['descricao'] . "','fotopath')";
    
$insert = mysqli_query($connect,$sql);

/* PARA DEBUGAR 
$arrResult = array(     
        'result' => $sql
);          
*/

if($insert){
    $arrResult = array(     
        'result' => 'Anúncio cadastrado com sucesso! Parabéns'
    );
}
else{
    $arrResult = array(     
        'result' => 'Oops tivemos um problema.'
    );
}

print json_encode($arrResult);
die();

?>

