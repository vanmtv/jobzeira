<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/base.css">
    <link rel="stylesheet" href="estilo/meus_itens.css">
    <link rel="stylesheet" href="estilo/font-awesome/css/font-awesome.min.css">
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="scripts/meus_itens.js"></script>
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
    <div class="content">
        <h1 class="titulo">Meus anúncios</h1>
        <div class="table">
            <table>
                <?php 
                $sql = "SELECT `anuncio_id`, `titulo`,`valor`, `descricao` FROM `anuncios` WHERE `profissional_id` = " . $_GET['id'];
                $resultado = mysqli_query($connect,$sql);
                $tableHead = '
                    <tr class="header">
                        <th>Título</th>
                        <th>Preço</th>
                        <th>Descrição</th>
                    </tr>';
                $count = 0;
                $tableBoady = '';

                while($item = mysqli_fetch_array($resultado)){
                    if($count % 2 == 0) $class = 'zebraOff';
                    else $class = 'zebraOn';
                    $count++;
                    $tableBoady .= '
                    <tr class="'.$class.'">
                        <td><a href="'.'anuncio.php?item='.$item[0].'">'.$item[1].'</a></td>
                        <td><a href="'.'anuncio.php?item='.$item[0].'">'.$item[2].'</a></td>
                        <td><a href="'.'anuncio.php?item='.$item[0].'">'.$item[3].'</a></td>
                    </tr>';
                }
                echo $tableHead;
                if($count > 0)
                    echo $tableBoady;
                else 
                    echo '<tr class="zebraOff"><td colspan = 3> Nenhum item encontrado</tr>';
                ?>
            </table>
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