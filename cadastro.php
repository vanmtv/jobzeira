<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/base.css">
    <link rel="stylesheet" href="estilo/home.css">
    <link rel="stylesheet" href="estilo/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="estilo/cadastro.css">
    <title>Jobzeira - Cadastro</title>
</head>
<body>
    <?php
        include_once 'db_connect.php';
    ?>
    <header>
        <nav class="menu">
            <a href="#"><img src="imagens/logo.svg" alt="Logo" class="menu-logo"></a>
            <ul class="menu-itens">
                <li><a href="#" class="current">Serviços</a></li>
                <li><a href="#">Catálogo</a></li>
                <li><a href="#">Anunciar</a></li>
                <li><img class="profile" src="imagens/profile.svg" alt="perfil"></li>
            </ul>
        </nav>
    </header>
    <div class="screenCadastro">
        <h1>Cadastro</h1>
    </div>
    <div class="telaCadastro">
        
        <form class="formCadastro">

            <fieldset class="nome">
                <div class="campo">
                    <label for="nomeCadastro">Nome Completo</label>
                    <input type="text" placeholder="Digite seu nome">
                </div>
            </fieldset>

            <fieldset class="group">
                <div class="campo">
                    <label for="tipoCadastro">Tipo</label>
                    <input class="tipoCadastro" type="text" placeholder="Sua descrição profissional">
                </div>

                <div id="check">                  
                    <label class="cpfcnpj">CPF ou CNPJ</label>
                    <input class="" type="checkbox" name="cpfCadastro" id="cpfCadastro" value="cpfCadastro">
                    <label class="" for="cpf">CPF</label>
                    <input class="" type="checkbox" name="cnpjCadastro" id="cnpjCadastro" value="cnpjCadastro">
                    <label class="" for="cnpj">CNPJ</label>
                </div>
            </fieldset>

            <fieldset class="group">
                <div class="campo">
                    <label for="cpfCadastro">CPF</label>
                    <input type="text" placeholder="000.000.000-00">
                </div>
                <div class="campo"> 
                    <label for="telefoneCadastro">Telefone</label>
                    <input type="text" placeholder="(XX)XXXXX-XXXX">
                </div>  
            </fieldset>

            <fieldset class="group">
                <div class="campo">
                    <label for="emailCadastro">Email</label>
                    <input type="email" placeholder="email@exemplo.com" name="emailCadastro" id="emailCadastro">
                </div>
                <div class="campo">
                    <label for="senhaCadastro">Senha</label>
                    <input type="password" placeholder="Digite uma senha">
                </div> 
            </fieldset>

            <fieldset class="group">
                <div class="campo">
                    <label for="nascimentoCadastro">Data de Nascimento</label>
                    <input type="text" placeholder="DD/MM/AAAA">
                </div>
            </fieldset>

            <div class="buttonCadastro">
                <button type="submit" id="enviarCadastro"><i class="fa fa-floppy-o" aria-hidden="true"></i> Cadastrar</button>
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