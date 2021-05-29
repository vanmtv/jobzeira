<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/base.css">
    <link rel="stylesheet" href="estilo/anuncio.css">
    <link rel="stylesheet" href="estilo/font-awesome/css/font-awesome.min.css">
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="scripts/anuncio.js"></script>
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
                <li><a href="#" class="current">Catálogo</a></li>
                <li><a href="anuncio.php">Anunciar</a></li>
                <li><a href="servico.php">Serviços</a></li>
                <li><a href="login.php">Entrar</a></li>
                <li><img class="profile" src="imagens/profile.svg" alt="perfil"></li>
            </ul>
        </nav>
    </header>
    <div class="content">
        <h1 class="titulo">Anunciar</h1>
        <div class="formulario">
            <form>
                <div class="raised">
                    <label>
                        <span class="mandatory">*</span>
                        Serviço Anunciado
                        <select class="mandatory" name="servico" id="servico" onchange="isFilled()">
                            <option value="">...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </label>
                </div>
                <div class="raised">
                    <label>
                        Nome do profissional
                        <input type="text" name="profissional" id="profissional" readonly>
                    </label>
                </div>
                <div class="half">
                    <label>
                        <span class="mandatory">*</span>
                        Valor
                        <input type="text" class="mandatory" name="valor" id="valor" onchange="isFilled()">
                    </label>
                    <label>
                        <span class="mandatory">*</span>
                        Número
                        <input type="text" class="mandatory" name="numero" id="numero" onchange="isFilled()">
                    </label>
                </div>
                <div class="raised">
                    <label>
                        <span class="mandatory">*</span>
                        Descrição do serviço anunciado
                        <textarea rows="4" class="mandatory" name="descricao" id="descricao"  onchange="isFilled()"></textarea>
                    </label>
                </div>
                <button>Voltar</button>
                <button onclick="sendToPHP()">Enviar</button>
            </form>
        </div>

        <?php
            $sql = "SELECT `titulo`,`valor`,`foto_path`,`descricao` FROM `anuncios` WHERE 1";
            $resultado = mysqli_query($connect, $sql);
            while ($row = mysqli_fetch_array($resultado)) {
            }
        ?>
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