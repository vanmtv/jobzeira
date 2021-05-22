<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/base.css">
    <link rel="stylesheet" href="estilo/home.css">
    <link rel="stylesheet" href="estilo/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="estilo/servico.css">
    <title>Jobzeira - Serviço</title>
</head>
<body>
    <?php
    include_once 'db_connect.php';
    ?>
    <header>
        <nav class="menu">
            <a href="#"><img src="imagens/logo.svg" alt="Logo" class="menu-logo"></a>
            <ul class="menu-itens">
                <li><a href="#" class="current">Catálogo</a></li>
                <li><a href="#">Anunciar</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Entrar</a></li>
                <li><img class="profile" src="imagens/profile.svg" alt="perfil"></li>
            </ul>
        </nav>
    </header>
    <div class="telaServico">
        <h1>Serviço</h1>
        <form class="formServico">
            <label for="nomeServico">Nome do serviço</label>
            <input type="text" placeholder="Nome do serviço">
            <label for="numTelText">Número de contato</label>
            <input type="number" placeholder="Numero de contato" name="telNumber" id="telNumber">
            <label for="">Descrição do Serviço</label>
            <textarea name="descricaoBox" id="descricao" cols="30" rows="10" placeholder="Descrição do serviço"></textarea>
            <div class="buttonServico">
                <button type="submit" id="cadastrarServico">CADASTRAR</button>
                <button type="submit" id="editarServico">EDITAR</button>
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
</body>

</html>