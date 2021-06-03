<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/base.css">
    <link rel="stylesheet" href="estilo/home.css">
    <link rel="stylesheet" href="estilo/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="estilo/contrato.css">
    <script src="scripts/home.js"></script>
    <script src="scripts/menu.js"></script>
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

    <div class="container flex-container ">
        <div>
            <h1 class="title-contrato">Contrato Nº: 00010</h1>
        </div>
        <div class="box-contrato">
        
            <div class="form-contrato">
                <form>
                    <div class="half">
                        <label for="nome-solicitante">Nome do solicitante:
                            <input type="text" readonly="readonly" id="nome-solicitante" placeholder="Antonio Santos">
                        </label>

                        <label>Nome do profissional liberal:
                            <input type="text" readonly="readonly" id="nome-profissional" placeholder="João da Silva">
                        </label>

                    </div>
                    <div class="half">
                        <label>CPF do solicitante:
                            <input type="text" readonly="readonly" id="cpf-solicitante" placeholder="798.657.010-57">
                        </label>

                        <label for="cpf-prof">CPF do profissional
                            <input type="text" readonly="readonly" id="cpf-profissional" placeholder="367.423.170-00">
                        </label>

                    </div>
                    <div class="half">
                        <label for="servico-contratado">Serviço Contratado:
                            <input type="text" readonly="readonly" id="servico-contratado" placeholder="Médico">
                        </label>

                        <label for="servico-contratado">Data de Contratação:
                            <input type="text" readonly="readonly" id="data-contratacao" placeholder="02/06/2021">
                        </label>

                    </div>
                    <div class="raised">
                        <label>Descrição do serviço anunciado:
                            <textarea readonly id="descricao-contrato" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."></textarea>
                        </label>

                    </div>
                    <div class="d-flex flex-end">
                        <a class="btnForm btnSecondary">Voltar</a>
                        <button class="btnForm btnPrimary">Contratar</button>
                    </div>
                </form>
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