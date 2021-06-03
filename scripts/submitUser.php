<?php

include_once '../db_connect.php';

$SQL = "INSERT INTO `usuarios`(`funcao`, `doc_id`, `nome`, `email`, `senha`, `endereco_id`, `foto_path`, `tel_numero`, `tel_ddd`, `tel_pais`) VALUES('" . $_POST['funcao']."', 1001, '" . $_POST['nome']."', '" . $_POST['email']."', '" . $_POST['senha']."', 1001, 'xpto', '99998888', '11', '+55')";

$resultado = mysqli_query($connect,$SQL);

if($resultado){
    $arrResult = array(    
        'result' => 'Cadastro funcionando.'
    );
}
else {
    $arrResult = array(    
        'result' => 'Cadastro não está funcionando.'
    );
}

print json_encode($arrResult);
die();

?>
