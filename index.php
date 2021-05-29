<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/base.css">
    <link rel="stylesheet" href="estilo/home.css">
    <link rel="stylesheet" href="estilo/font-awesome/css/font-awesome.min.css">
    <script src="scripts/home.js"></script>
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
    <div class="banner">
        <div class="banner-shadow">
            <div>
                <h1 class="title">Bem-vindo</h1>
                <div class="divisor"></div>
                <h3 class="subtitle">Qual serviço você precisa hoje ?</h3>
            </div>
        </div>
    </div>
    <div class="catalog">
        <?php
        $sql = "SELECT `titulo`,`valor`,`foto_path`,`descricao` FROM `anuncios` WHERE 1";
        $resultado = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_array($resultado)) {
            echo '<div class="catalog-item">' .
                '<div class="catalog-item-img" style="background-image: url(' . $row[2] . ');"></div>' .
                '<div class="catalog-item-body">' .
                '<h3>' . $row[0] . '</h3>' .
                '<h3 class="price">R$' . intval($row[1]) . '</h3>' .
                '<p>' . $row[3] . '</p>' .
                '</div>' .
                '</div>';
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