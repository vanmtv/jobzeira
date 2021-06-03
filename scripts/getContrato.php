<?php

    include_once '../db_connect.php';
    $sqlItem = "SELECT `titulo`, `servico_id`, `profissional_id`, `valor`, `descricao` FROM `anuncios` WHERE `anuncio_id` = " . $_POST['anuncio'];
    $awnser = mysqli_query($connect, $sqlItem);
    $item = mysqli_fetch_array($awnser);

    $sqlService = "SELECT `titulo`, `descricao` FROM `servicos` WHERE `servico_id` = " . $item[1];// . $_POST['id'];
    $awnser = mysqli_query($connect, $sqlService);
    $service = mysqli_fetch_array($awnser);

    $sqlPro = "SELECT `doc_id`, `nome`, `email`, `tel_numero` FROM `usuarios` WHERE `usuario_id` = " . $item[2];// . $_POST['id'];
    $awnser = mysqli_query($connect, $sqlPro);
    $pro = mysqli_fetch_array($awnser);

    $sqlDoc = "SELECT `tipo`, `valor` FROM `documentos` WHERE `doc_id` = " . $pro[0];// . $_POST['id'];
    $awnser = mysqli_query($connect, $sqlDoc);
    $docPro = mysqli_fetch_array($awnser);

    $sqlUser = "SELECT `doc_id`, `nome`, `email`, `tel_numero` FROM `usuarios` WHERE `usuario_id` = " . $_POST['cliente'];// . $_POST['id'];
    $awnser = mysqli_query($connect, $sqlUser);
    $user = mysqli_fetch_array($awnser);

    $sqlDoc = "SELECT `tipo`, `valor` FROM `documentos` WHERE `doc_id` = " . $user[0];// . $_POST['id'];
    $awnser = mysqli_query($connect, $sqlDoc);
    $docUser = mysqli_fetch_array($awnser);
    
    $contract = new \stdClass();
    $contract -> itemTitle = $item[0];
    $contract -> value = $item[3];
    $contract -> itemDesc = $item[4];
    
    $contract -> servicoTitle = $service[0];
    $contract -> servicoDesc = $service[1];

    $contract -> profissionalName = $pro[1];
    $contract -> profissionalEmail = $pro[2];
    $contract -> profissionalTel = $pro[3];
    $contract -> profissionalDoc = $docPro[1];
    $contract -> profissionalDocType = $docPro[0];

    $contract -> clienteName = $user[1];
    $contract -> clienteEmail = $user[2];
    $contract -> clienteTel = $user[3];
    $contract -> clienteDoc = $docUser[1];
    $contract -> clienteDocType = $docUser[0];

    print json_encode($contract);
    die();
?>