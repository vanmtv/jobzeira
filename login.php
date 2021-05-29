<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/base.css">
    <link rel="stylesheet" href="estilo/home.css">
    <link rel="stylesheet" href="estilo/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="estilo/login.css">
    <title>Jobzeira</title>
</head>

<body>
    <?php
    include_once 'db_connect.php';
    ?>
    <header>
        <nav class="menu">
            <a href="index.php"><img src="imagens/logo.svg" alt="Logo" class="menu-logo"></a>
            <ul class="menu-itens">
                <li><a href="index.php">Catálogo</a></li>
                <li><a href="anuncio.php">Anunciar</a></li>
                <li><a href="servico.php">Serviços</a></li>
                <li><a href="login.php" class="current">Entrar</a></li>
                <li><img class="profile" src="imagens/profile.svg" alt="perfil"></li>
            </ul>
        </nav>
    </header>
    <div class="box-login">
        <div class="title">
            <h1>Login</h1>
        </div>
        <form>
            <p class="text-input">Email</p>
            <input type="email" placeholder="Digite seu email" id="email" onkeyup='validaEmail()'>
            <div id="txtEmail"></div>
            <p class="text-input">Senha</p>
            <input type="password" placeholder="Digite sua senha" id="senha" onkeyup='validaSenha()'>
            <div id="txtSenha"></div>

            <div class="btn-logar">
            <button type="submit" onclick='logar()'>ENTRAR</button> 
            </div>
        </form>
        </div>
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
    <script src="./scripts/login.js"></script>
</body>

</html>