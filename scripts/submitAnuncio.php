<?php

include_once '../db_connect.php';

if($_GET['type' == 'New']){
    $message = 'cadastrado';
    $sql = "INSERT INTO `anuncios`(`servico_id`,`titulo`, `profissional_id`, `valor`, `descricao`, `foto_path`) VALUES (" . $_POST['servico'] .
     ",'" . $_POST['titulo']. "',". $_POST['profissional'] ."," . $_POST['valor'] . ",'" . $_POST['descricao'] . "','fotopath')";
}
else{
    $message = 'editado';
    $sql = "UPDATE `anuncios` SET `servico_id` =" . $_POST['servico'] . ",`titulo`= '" . $_POST['titulo'] . "'," . "`valor` =" . $_POST['valor'] . "," . "`descricao` =" . "'" . $_POST['descricao'] . "'" . " WHERE  `anuncio_id` = " . $_POST['id'];
}
$insert = mysqli_query($connect,$sql);
 
//$name = $_FILES['file']['name'];
//$target_dir = "imagens/itens";
//$target_file = $target_dir . basename($_FILES["file"]["name"]);

// Select file type
//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Valid file extensions
//$extensions_arr = array("jpg","jpeg","png","gif");

// Check extension
//if( in_array($imageFileType,$extensions_arr) ){
    // Upload file
    /*if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
        // Insert record
        $query = "INSERT INTO `images`(`name`) values('".$name."')";
        mysqli_query($connect,$query);
        $arrResult = array(     
            'result' => 'Entrou'
        );
        print json_encode($arrResult);
        die();
    }*/
//}

if($insert){
    $arrResult = array(     
        'result' => 'Anúncio ' . $message . ' com sucesso! Parabéns'
    );
}
else{
    $arrResult = array(     
        'result' => $sql
    );
}

print json_encode($arrResult);
die();

?>

