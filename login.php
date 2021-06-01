<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/base.css">
    <link rel="stylesheet" href="estilo/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="estilo/login.css">
    <script src="scripts/menu.js"></script>
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <title>Jobzeira</title>
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
    <div class="box-login formulario">
        <div class="title">
            <h1>Login</h1>
        </div>
        <form>
            <div class="raised">
                <label class="text-input">Email
                    <input type="email" placeholder="Digite seu email" id="email" onkeyup='validaEmail()'>
                    <div id="txtEmail"></div>
                </label>
                <label class="text-input">Senha
                    <input type="password" placeholder="Digite sua senha" id="senha" onkeyup='validaSenha()'>
                    <div id="txtSenha"></div>
                </label>
            </div>
            <div class="btn-logar">
                <button type="submit" class="btnForm btnPrimary" onclick='logar()'>Entrar</button>
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