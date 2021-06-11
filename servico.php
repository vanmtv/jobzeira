<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/base.css">
    <link rel="stylesheet" href="estilo/servico.css">
    <link rel="stylesheet" href="estilo/font-awesome/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-migrate-3.3.2.min.js" integrity="sha256-Ap4KLoCf1rXb52q+i3p0k2vjBsmownyBTE1EqlRiMwA=" crossorigin="anonymous"></script>
   
    <!-- pdfmake files: -->
    <script src='https://cdn.jsdelivr.net/npm/pdfmake@latest/build/pdfmake.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/pdfmake@latest/build/vfs_fonts.min.js'></script>
    <!-- html-to-pdfmake file: -->
    <script src="https://cdn.jsdelivr.net/npm/html-to-pdfmake/browser.js"></script>
    
    <script src="scripts/servico.js"></script>
    <script src="scripts/menu.js"></script>
    <title>Jobzeira</title>
</head>

<body>
    <?php
    include_once 'db_connect.php';
    $item_id = $_GET['item'];
    if (!$item_id) $item_id = -1;

    $user_id = $_GET['id'];
    $title = 'Novo Serviço';
    $class = 'mandatory';

    if ($item_id == -1 || !$item_id) {
        $sql_user = "SELECT `nome` FROM `usuarios` WHERE `usuario_id` = " . $user_id;
        $button_label = 'Anunciar';
        $type = 'New';
    } else {
        $sql_item = "SELECT * FROM `servicos` WHERE `servico_id` = " . $item_id;
        $query_item = mysqli_query($connect, $sql_item);
        $item = mysqli_fetch_array($query_item);

        $title = $item[1];
        $class .= ' filled';
        $sql_user = "SELECT `nome` FROM `usuarios` WHERE `usuario_id` = " . $item[3];
        $type = 'Edit';
        $button_label = 'Salvar';
        $showDeleteButton = true;
    };

    $query_user = mysqli_query($connect, $sql_user);
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
        <h1 class="titulo"><?php echo $title ?></h1>
        <div class="delete">
            <?php if ($showDeleteButton)
                echo '<button class="btnForm btnDelete" onclick="sendToPHP(\'Delete\',' . $item_id . ')">Excluir</button>';
            ?>
        </div>
        <div class="formulario">
            <form>
                <div class="raised">
                    <label>
                        <span class="<?php echo $class ?>">*</span>
                        Título
                        <input type="text" class="<?php echo $class ?>" name="titulo" id="titulo" onchange="isFilled()" <?php if ($item) echo "value='" . $title . "'" ?>>
                    </label>
                </div>
                <div class="half">
                    <label>
                        Nome do profissional
                        <input type="text" name="profissional" value="<?php echo $user[0] ?>" id="profissional" readonly>
                    </label>
                </div>
                <div class="half">
                    <label>
                        <span class="<?php echo $class ?>">*</span>
                        Valor
                        <input type="number" class="<?php echo $class ?>" name="valor" id="valor" onchange="isFilled()" <?php if ($item) echo "value='" . $item[3] . "'" ?>>
                    </label>
                    <label>
                        Número
                        <input type="text" readonly name="numero" id="numero" onchange="isFilled()" <?php if ($item) echo "value='" . $item[0] . "'" ?>>
                    </label>
                </div>
                <div class="raised">
                    <label>
                        <span class="<?php echo $class ?>">*</span>
                        Descrição do Serviço
                        <textarea rows="6" class="<?php echo $class ?>" name="descricao" id="descricao" onchange="isFilled()"><?php if ($item) echo $item[4] ?></textarea>
                    </label>
                </div>
                <div class="raised">
                    <div class="paperclip">
                        <span class="fa fa-paperclip" aria-hidden="true"></span>
                        <span class="label">Anexar foto</span>
                        <input type='file' name='file' id="file" />
                    </div>
                </div>
            </form>
            <div class="d-flex flex-end">
                <span id="actions"></span>
                <button class="btnForm btnPrimary" onclick="sendToPHP(<?php echo '\'' . $type . '\',' . $item_id ?>)"><?php echo $button_label ?></button>
            </div>
        </div>
    </div>
    <footer>
        <h4>Desenvolvido por XDevs LTDA.</h4>
    </footer>
</body>

</html>