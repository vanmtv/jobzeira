<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/base.css">
    <link rel="stylesheet" href="estilo/font-awesome/css/font-awesome.min.css">
    <script src="scripts/menu.js"></script>
    <link rel="stylesheet" href="estilo/servico.css">
    <title>Jobzeira - Serviço</title>
</head>
<body>
    <?php
    include_once 'db_connect.php';
    ?>
    <header>
        <nav class="menu">
            <a href="index.php"><img src="imagens/logo.svg" alt="Logo" class="menu-logo"></a>
            <ul class="menu-itens" id="menu-itens">
            </ul>
        </nav>
    </header>
    <div class="screenServico">
        <h1>Serviço</h1>
    </div>
    <div class="telaServico">
        
        <form class="formServico">
            <label for="nomeServico" >Nome do serviço</label>
            <input type="text" placeholder="Nome do serviço" id="nomeServico" onkeyup='validaNomeServico()'>
            <div id="txtNomeServico"></div>
            <label for="numTelText" id="numTel">Número de contato</label>
            <input type="number" placeholder="Numero de contato" name="telNumber" id="telNumber" onkeyup='validaNumTel()'>
            <div id="txtNumTel"></div>
            <label for="">Descrição do Serviço</label>
            <textarea name="descricaoBox" id="descricao" cols="30" rows="10" placeholder="Descrição do serviço"></textarea onkeyup='validaDescricao()'>
            <div id="txtDescricao"></div>
            <div class="buttonServico">
                <button type="submit" id="cadastrarServico" onclick='cadastrar()'>CADASTRAR</button>
                <button type="submit" id="editarServico"  onclick='editar()'>EDITAR</button>
            </div>
        </form>
    </div>

    <footer>
        <!--div><img src="imagens/logo.svg" alt="Logo" class="footer-logo"></div-->
        <h4>Desenvolvido por XDevs LTDA.</h4>
        <!--div class="social-midia">
            <div class="icons"><i class="fa fa-facebook"></i></div>
            <div class="icons"><i class="fa fa-instagram"></i></div>
            <div class="icons"><i class="fa fa-twitter"></i></div>
        </div-->
    </footer>
    <script src="./scripts/servico.js"></script>
</body>

</html>