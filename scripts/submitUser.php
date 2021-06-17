<?php

include_once '../db_connect.php';

$sql = "SELECT * FROM `usuarios` WHERE `email`= '" . $_POST['email'] . "'";
$duplicateEmail = mysqli_query($connect,$sql);
$duplicateEmail = mysqli_fetch_array($duplicateEmail);
if($duplicateEmail)
    $msg = 'E-mail';

$sql = "SELECT * FROM `documentos` WHERE `valor`= '" . $_POST['document'] . "'";
$duplicateDocument = mysqli_query($connect,$sql);
$duplicateDocument = mysqli_fetch_array($duplicateDocument);
if($duplicateDocument)
    $msg = 'Documento';

if(!$duplicateEmail && !$duplicateDocument){
    $sql = "INSERT INTO `usuarios`(`funcao`, `doc_id`, `nome`, `email`, `senha`, `endereco_id`, `foto_path`, `tel_numero`, `tel_ddd`, `tel_pais`) VALUES('" . $_POST['funcao']."', 1, '" . $_POST['nome']."', '" . $_POST['email']."', '" . $_POST['senha']."', 1, 'xpto', '99998888', '11', '+55')";
    $resultado = mysqli_query($connect,$sql);

    if($resultado){
        $arrResult = array(    
            'result' => 'Usuário cadastrado com sucesso.'
        );
    }
    else {
        $arrResult = array(    
            'result' => 'Houve um problema ao tentar cadastrar o usuário.'
        );
    }
}else{
    $arrResult = array(    
        'result' => $msg . ' já cadastrado, por favor insira outro'
    );
}

print json_encode($arrResult);
die();

?>
