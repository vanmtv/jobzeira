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
    <script src="scripts/contrato.js"></script>
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

    <!-- pdfmake files: -->
    <script src='https://cdn.jsdelivr.net/npm/pdfmake@latest/build/pdfmake.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/pdfmake@latest/build/vfs_fonts.min.js'></script>
    <!-- html-to-pdfmake file: -->
    <script src="https://cdn.jsdelivr.net/npm/html-to-pdfmake/browser.js"></script>
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

    <div class="content">
        <h1 class="titulo">Contrato Nº: 001923</h1>
        <!--div class="box-contrato"-->
        <div class="formulario">
            <form>
                <div class="half">
                    <label for="nome-solicitante">Nome do solicitante:
                        <input type="text" readonly="readonly" id="nome-solicitante">
                    </label>

                    <label>Nome do profissional liberal:
                        <input type="text" readonly="readonly" id="nome-profissional">
                    </label>

                </div>
                <div class="half">
                    <label>CPF do solicitante:
                        <input type="text" readonly="readonly" id="cpf-solicitante">
                    </label>

                    <label for="cpf-prof">CPF do profissional
                        <input type="text" readonly="readonly" id="cpf-profissional">
                    </label>

                </div>
                <div class="half">
                    <label for="servico-contratado">Serviço Contratado:
                        <input type="text" readonly="readonly" id="servico-contratado">
                    </label>

                    <label for="servico-contratado">Data de Contratação:
                        <input type="text" readonly="readonly" id="data-contratacao">
                    </label>

                </div>
                <div class="raised">
                    <label>Descrição do serviço anunciado:
                        <textarea readonly id="descricao-contrato"></textarea>
                    </label>

                </div>
            </form>
            <br>
            <div class="d-flex flex-end">
                <!--a class="btnForm btnSecondary">Voltar</a-->
                <button class="btnForm btnPrimary" onclick="exportPDF()">Gerar PDF</button>
            </div>
            <!--/div-->
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