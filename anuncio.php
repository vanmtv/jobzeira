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
    <script src="scripts/menu.js"></script>
    <title>Jobzeira</title>
</head>

<body>
    <?php
    include_once 'db_connect.php';
    $item_id = $_GET['item'];
    $user_id = $_GET['id'];
    $title = 'Anunciar';
    $class = 'mandatory';

    if($item_id == -1 || !$item_id){
        $sql_user = "SELECT `nome` FROM `usuarios` WHERE `usuario_id` = " . $user_id;
        $sql_servico = "SELECT `servico_id`,`titulo` FROM `servicos` WHERE 1";
        $query_servico = mysqli_query($connect,$sql_servico);
    }
    else{
        $sql_item = "SELECT * FROM `anuncios` WHERE `anuncio_id` = " . $item_id;
        $query_item = mysqli_query($connect,$sql_item);
        $item = mysqli_fetch_array($query_item);

        $title = $item[1];
        $class .= ' filled';
        $sql_user = "SELECT `nome` FROM `usuarios` WHERE `usuario_id` = " . $item[3];
    };

    $query_user = mysqli_query($connect,$sql_user);
    $user = mysqli_fetch_array($query_user);

    ?>
    <header>
        <nav class="menu">
            <a href="index.php"><img src="imagens/logo.svg" alt="Logo" class="menu-logo"></a>
            <ul class="menu-itens" id="menu-itens">
            </ul>
        </nav>
    </header>
    <div class="content">
        <h1 class="titulo"><?php echo $title?></h1>
        <div class="formulario">
            <form>
                <div class="raised">
                    <label>
                        <span class="<?php echo $class?>">*</span>
                        Título
                        <input type="text" class="<?php echo $class?>" name="titulo" id="titulo" 
                        onchange="isFilled()" <?php if($item) echo "value='" . $title . "'"?>>
                    </label>
                </div>
                <div class="half">
                    <label>
                        <span class="<?php echo $class?>">*</span>
                        Serviço Anunciado
                        <select class="<?php echo $class?>" name="servico" id="servico" onchange="isFilled()">
                            <?php 
                                if($item) echo "<option value='" . $item[2] . "'  >" . $item[2] . "</option>";
                                else{
                                    while($servico = mysqli_fetch_array($query_servico)){
                                        echo "<option value='" . $servico[0] . "'  >" . $servico[1] . "</option>";
                                    }
                                }
                            ?>
                        </select>
                    </label>
                    <label>
                        Nome do profissional
                        <input type="text" name="profissional" value="<?php echo $user[0] ?>" id="profissional" readonly>
                    </label>
                </div>
                <div class="half">
                    <label>
                        <span class="<?php echo $class?>">*</span>
                        Valor
                        <input type="text" class="<?php echo $class?>" name="valor" id="valor" 
                                onchange="isFilled()" <?php if($item) echo "value='" . $item[4] . "'"?> >
                    </label>
                    <label>
                        Número
                        <input type="text" readonly name="numero" id="numero" 
                                onchange="isFilled()" <?php if($item) echo "value='" . $item[0] . "'"?>>
                    </label>
                </div>
                <div class="raised">
                    <label>
                        <span class="<?php echo $class?>">*</span>
                        Descrição do serviço anunciado
                        <textarea rows="6" class="<?php echo $class?>" name="descricao" id="descricao" 
                         onchange="isFilled()"><?php if($item) echo $item[5]?></textarea>
                    </label>
                </div>
                <button>Voltar</button>
                <button onclick="sendToPHP()">Enviar</button>
            </form>
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