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
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
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
        </form>
        <div class="btn-logar">
                <button type="submit" class="btnForm btnPrimary" onclick='logar()'>Entrar</button>
            </div>
        <a style="text-align: center;display: block; color: #333; margin-top: 16px;"  href="profile.php">Cadastrar</a>
    </div>
    </div>
    <footer>
        <h4>Desenvolvido por XDevs LTDA.</h4>
    </footer>
    <script src="./scripts/login.js"></script>
</body>

</html>