<?php

include_once '../db_connect.php';

if($_POST['type'] == 'New'){
    $message = 'cadastrado';
    $sql = "INSERT INTO `anuncios`(`titulo`, `profissional_id`, `valor`, `descricao`, `foto_path`) VALUES ('" . 
    $_POST['titulo']. "',". $_POST['profissional'] ."," . $_POST['valor'] . ",'" . $_POST['descricao'] . "','fotopath')";
}
else if($_POST['type'] == 'Edit'){
    $message = 'editado';
    $sql = "UPDATE `anuncios` SET `titulo`= '" . $_POST['titulo'] . "'," . "`valor` =" . $_POST['valor'] . "," . "`descricao` =" . "'" . $_POST['descricao'] . "'" . " WHERE  `anuncio_id` = " . $_POST['id'];
}
else{
    $message = 'deletado';
    $sql = "DELETE FROM `anuncios` WHERE  `anuncio_id` = " . $_POST['id'];
}
$action = mysqli_query($connect,$sql);
 
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

if($action){
    $arrResult = array(     
        'result' => 'Anúncio ' . $message . ' com sucesso!'
    );
}
else{
    $arrResult = array(     
        'result' => 'Oops... tivemos um problema, tente novamente.'
    );
}

print json_encode($arrResult);
die();

?>

<?php
