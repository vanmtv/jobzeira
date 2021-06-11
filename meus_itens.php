<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/base.css">
    <link rel="stylesheet" href="estilo/meus_itens.css">
    <link rel="stylesheet" href="estilo/font-awesome/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-migrate-3.3.2.min.js" integrity="sha256-Ap4KLoCf1rXb52q+i3p0k2vjBsmownyBTE1EqlRiMwA=" crossorigin="anonymous"></script>
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
        <h1 class="titulo">Meus Serviços</h1>
        <div class="novoServico">
            <a href="servico.php?id=1" class="btnForm btnPrimary">Novo</a>
        </div>
        <div class="table">
            <table>
                <?php 
                $sql = "SELECT `servico_id`, `titulo`,`valor`, `descricao` FROM `servicos` WHERE `profissional_id` = " . $_GET['id'];
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
                        <td><a href="'.'servico.php?item='.$item[0].'">'.$item[1].'</a></td>
                        <td><a href="'.'servico.php?item='.$item[0].'">'.$item[2].'</a></td>
                        <td><a href="'.'servico.php?item='.$item[0].'">'.$item[3].'</a></td>
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
        <h4>Desenvolvido por XDevs LTDA.</h4>
    </footer>
</body>

</html>