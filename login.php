<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/estilo/base.css">
    <link rel="stylesheet" href="/estilo/home.css">
    <link rel="stylesheet" href="/estilo/login.css">
    <link rel="stylesheet" href="/estilo/grid.css">
    <title>Jobzeira Login</title>
</head>

<body>
    <header>
        <nav class="menu">
            <a href="index.php"><img src="/imagens/logo.svg" alt="Logo" class="menu-logo"></a>
            <ul class="menu-itens">
                <li><a href="#" class="current">Catálogo</a></li>
                <li><a href="#">Anunciar</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Entrar</a></li>
                <li><img class="profile" src="/imagens/profile.svg" alt="perfil"></li>
            </ul>
        </nav>
    </header>
    <div class="box-login">
        <div class="title">
            <h1>Login</h1>
        </div>
        <div>
            <p class="text-input">Nome ou Email</p>
            <input type="text" placeholder="Digite seu email">
            <p class="text-input">Senha</p>
            <input type="password" placeholder="Digite sua senha">
            <div class="btn-logar">
                <button>Entrar</button> 
            </div>
        </div>
    </div>

    <script src="login.js"></script>
</body>

</html>