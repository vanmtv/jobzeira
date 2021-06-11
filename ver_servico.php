<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/base.css">
    <link rel="stylesheet" href="estilo/ver_servico.css">
    <link rel="stylesheet" href="estilo/font-awesome/css/font-awesome.min.css">
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <script src="scripts/ver_servico.js"></script>
    <script src="scripts/menu.js"></script>
    <title>Jobzeira</title>
</head>

<body>
    <?php
    include_once 'db_connect.php';
    $sql_item = "SELECT `servico_id`,`titulo`,`valor`,`foto_path`,`descricao` FROM `servicos` WHERE `servico_id`=" . "'" . $_GET["item"] . "'";
    $resultado = mysqli_query($connect, $sql_item);
    $item = mysqli_fetch_array($resultado);
    ?>
    <header>
        <nav class="menu">
            <a href="index.php"><img src="imagens/logo.svg" alt="Logo" class="menu-logo"></a>
            <ul class="menu-itens" id="menu-itens">
            </ul>
        </nav>
    </header>
    <div class="content">
        <h1 class="titulo"><?php echo $item[1] ?></h1>
        <div class="view">
            <div class="banner-img" style='background-image: url("<?php echo $item[3] ?>")'></div>
            <div class="actions">
                <div class="buttons">
                    <button class="btnPrimary btnForm" onclick="goToContract(<?php echo $item[0]?>)">Contratar</button>
                    <a href="index.php"><button class="btnSecondary btnForm">Voltar</button></a>
                </div>
                <h1 class="price"><?php echo $item[2] ?></h1>
            </div>
        </div>
        <div class="longText">
            <h2>Descrição do Serviço</h2>
            <div><?php echo $item[4] ?></div>
        </div>
    </div>
    <footer>
        <h4>Desenvolvido por XDevs LTDA.</h4>
    </footer>
</body>

</html>