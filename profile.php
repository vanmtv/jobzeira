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
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <script src="scripts/menu.js"></script>
    <script src="scripts/profile.js"></script>
    <title>Jobzeira - Cadastro</title>
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
    <div class="content">
        <h1 class="titulo">Cadastro de usuário</h1>
        <div class="formulario">
            <form>
                <div class="raised">
                    <label><span class="mandatory">*</span>Nome Completo
                        <input id="nome" class="mandatory" type="text" onchange="isFilled()">
                    </label>
                </div>

                <div class="half">
                    <label><span class="mandatory">*</span>Tipo
                        <div class="radio-label">
                            <label for="cliente">
                                <input class="mandatory" type="radio" onchange="isFilled()" id="cliente" name="type" value="cliente">
                                Cliente
                            </label>
                            <label for="profissional">
                                <input class="mandatory" type="radio" onchange="isFilled()" id="profissional" name="type" value="profissional">
                                Profissional
                            </label>
                        </div>
                    </label>
                    <label><span class="mandatory">*</span>CPF ou CNPJ
                        <div class="radio-label">
                            <label for="cpf">
                                <input class="mandatory" type="radio" onchange="isFilled()" id="cpf" name="doc" value="cpf">
                                CPF
                            </label>
                            <label for="cnpj">
                                <input class="mandatory" type="radio" onchange="isFilled()" id="cnpj" name="doc" value="cnpj">
                                CNPJ
                            </label>
                        </div>
                    </label>
                </div>

                <div class="raised">
                    <label><span class="mandatory">*</span>N° do Documento
                        <input id="document" class="mandatory" type="text" onchange="isFilled()">
                    </label>
                </div>

                <div class="half">
                    <label><span class="mandatory">*</span>Data de nascimento
                        <input id="date" class="mandatory" type="date" onchange="isFilled()">
                    </label>
                    <label><span class="mandatory">*</span>Telefone
                        <input id="tel" class="mandatory" type="text" onchange="isFilled()">
                    </label>
                </div>

                <div class="half">
                    <label><span class="mandatory">*</span>Email
                        <input id="email" class="mandatory" type="email" onchange="isFilled()">
                    </label>
                    <label><span class="mandatory">*</span>Senha
                        <input id="senha" class="mandatory" type="password" onchange="isFilled()">
                    </label>
                </div>

                <div class="raised">
                    <div class="paperclip">
                        <span class="fa fa-paperclip" aria-hidden="true"></span>
                        <span class="label">Anexar foto</span>
                        <input type='file' name='file' id="file"/>
                    </div>
                </div>
            </form>
            <div class="d-flex flex-end">
                <a class="btnForm btnSecondary" href="index.php">Voltar</a>
                <button class="btnForm btnPrimary" onclick="sendToPHP('New', -1)">Cadastrar</button>
            </div>
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
</body>

</html>