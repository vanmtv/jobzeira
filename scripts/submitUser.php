<?php

include_once '../db_connect.php';

$sql = "SELECT * FROM `usuarios` WHERE `email`= '" . $_POST['email'] . "'";
$duplicateEmail = mysqli_query($connect, $sql);
$duplicateEmail = mysqli_fetch_array($duplicateEmail);
if ($duplicateEmail)
    $msg = 'E-mail';

$sql = "SELECT * FROM `documentos` WHERE `valor`= '" . $_POST['document'] . "'";
$duplicateDocument = mysqli_query($connect, $sql);
$duplicateDocument = mysqli_fetch_array($duplicateDocument);
if ($duplicateDocument)
    $msg = 'Documento';

if (!$duplicateEmail && !$duplicateDocument) {
    $sql = "INSERT INTO `documentos`(`tipo`,`valor`) VALUES('" . $_POST['docType'] . "','" . $_POST['document'] . "')";
    $resultadoSQL = mysqli_query($connect, $sql);
    $doc_id = mysqli_insert_id($connect);

    $sql = "INSERT INTO `enderecos`(`logradouro`, `cep`, `municipio`, `complemento`, `bairro`, `numero`) VALUES('" . $_POST['logradouro'] . "','" . $_POST['cep'] . "','" . $_POST['municipio'] . "','" . $_POST['complemento'] . "','" . $_POST['bairro'] . "'," . $_POST['numero'] . ")";
    $resultadoSQL = mysqli_query($connect, $sql);
    $endereco_id = mysqli_insert_id($connect);

    $sql = "INSERT INTO `usuarios`(`funcao`,`data_nasc`, `doc_id`, `nome`, `email`, `senha`, `endereco_id`, `foto_path`, `tel_numero`, `tel_ddd`, `tel_pais`) VALUES('" . $_POST['funcao'] . "','". $_POST['data_nasc'] ."', " . $doc_id . " , '" . $_POST['nome'] . "', '" . $_POST['email'] . "', '" . $_POST['senha'] . "', " . $endereco_id . " , 'xpto', '" . $_POST['tel'] . "' , '11', '+55')";
    $resultado = mysqli_query($connect, $sql);
    $user = mysqli_insert_id($connect);

    if ($resultado) {
        $sql = "SELECT `usuario_id`,`nome`,`funcao` FROM `usuarios` WHERE `usuario_id` = " . $user;
        $resultado = mysqli_query($connect, $sql);
        $userData = mysqli_fetch_array($resultado);
        $arrResult = array(
            'result' => 'Usuário cadastrado com sucesso.',
            'user' => $userData
        );
    } else {
        $arrResult = array(
            'result' => 'Houve um problema ao tentar cadastrar o usuário, verifique os valores digitados.'
        );
    }
} else {
    $arrResult = array(
        'result' => $msg . ' já cadastrado, por favor insira outro'
    );
}

print json_encode($arrResult);
die();
