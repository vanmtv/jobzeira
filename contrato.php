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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="scripts/contrato.js"></script>
    <script src="scripts/menu.js"></script>

    <!-- pdfmake files: -->
    <script src='https://cdn.jsdelivr.net/npm/pdfmake@latest/build/pdfmake.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/pdfmake@latest/build/vfs_fonts.min.js'></script>
    <!-- html-to-pdfmake file: -->
    <script src="https://cdn.jsdelivr.net/npm/html-to-pdfmake/browser.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
            emailjs.init("user_HUyESZfl2Az7QiCOtgF8i");
        })();
    </script>
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
        <h1 class="titulo">Pré-visualização do Contrato</h1>
        <div class="formulario">
            <form>
                <div class="half">
                    <label for="nome-solicitante">Nome do Contratante
                        <input type="text" readonly="readonly" id="nome-solicitante">
                    </label>

                    <label>Nome do Profissional
                        <input type="text" readonly="readonly" id="nome-profissional">
                    </label>
                </div>
                <div class="half">
                    <label>Documento do Contratante
                        <input type="text" readonly="readonly" id="cpf-solicitante">
                    </label>

                    <label for="cpf-prof">Documento do Profissional
                        <input type="text" readonly="readonly" id="cpf-profissional">
                    </label>
                </div>
                <div class="half">
                    <label for="valor">Valor
                        <input type="text" readonly="readonly" id="valor">
                    </label>


                    <label for="servico-contratado">Data de Contratação
                        <input type="text" readonly="readonly" id="data-contratacao">
                    </label>
                </div>
                <div class="raised">
                    <label for="titulo-anuncio">Serviço Contratado
                        <input type="text" readonly="readonly" id="titulo-servico">
                    </label>
                </div>
                <div class="raised">
                    <label>Descrição do Serviço
                        <textarea readonly rows="5" id="descricao-servico"></textarea>
                    </label>
                </div>
            </form>
            <br>
            <div class="d-flex flex-end">
                <button class="btnForm btnPrimary" onclick="exportPDF()">Gerar PDF</button>
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