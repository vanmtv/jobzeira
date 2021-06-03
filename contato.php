<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/base.css">
    <link rel="stylesheet" href="estilo/home.css">
    <link rel="stylesheet" href="estilo/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="estilo/contato.css">
    <title>Jobzeira - Contato</title>
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
    <div class="screenContato">
        <h1>Contato</h1>
    </div>
    <div class="telaContato">
        
        <form class="formContato">
            <label for="nomeContato">Nome</label>
            <input type="text" placeholder="Digite seu nome">
            
            <label for="emailContato">Email</label>
            <input type="email" placeholder="email@exemplo.com" name="emailContato" id="emailContato">
            
            <label for="assuntoContato">Assunto</label>
            <input type="text" placeholder="Título do assunto" name="assuntoContato" id="assuntoContato">
            
            <label for="">Mensagem</label>
            <textarea name="mensagemContato" id="mensagemContato" cols="30" rows="10" placeholder="Como podemos ajudar hoje?"></textarea>
            <div class="buttonContato">
                <button type="submit" id="cadastrarContato"><i class="fa fa-paper-plane" aria-hidden="true"></i> Enviar</button>
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