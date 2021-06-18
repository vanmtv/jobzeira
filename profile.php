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
        $title = 'Cadastro de usuário';
        $id = $_GET['id'];
        if(!$id)
            $id = -1;

        $user = [];
        $doc = [''];
        $endereco = [];
        $buttonLabel = 'Cadastrar';
        $class = '';
        $name = '';

        if($id != -1){
            $sql = "SELECT `nome`,`funcao`,`doc_id`,`email`,`tel_numero`,`endereco_id` FROM `usuarios` WHERE `usuario_id` = " . $id;
            $awnser = mysqli_query($connect,$sql);
            $user = mysqli_fetch_array($awnser);
            $title = "Editar perfil";
            $name = $user[0];
            $class = 'filled';
            $buttonLabel = 'Salvar';

            $sql = "SELECT `valor`,`tipo` FROM `documentos` WHERE `doc_id` = " . $user[2];
            $awnser = mysqli_query($connect,$sql);
            $doc = mysqli_fetch_array($awnser);

            $sql = "SELECT `endereco_id`, `logradouro`, `cep`, `municipio`, `complemento`, `bairro`, `numero` FROM `enderecos` WHERE `endereco_id` = " . $user[5];
            $awnser = mysqli_query($connect,$sql);
            $endereco = mysqli_fetch_array($awnser);
        }
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
        <div class="formulario">
            <form>
                <div class="raised">
                    <label><span class="mandatory <?php echo $class ?>">*</span>Nome Completo
                        <input type="text" class="mandatory <?php echo $class ?>" onchange="isFilled()" id="nome" class="mandatory 
                        <?php echo $class ?>"  value="<?php echo $user[0] ?>" >
                    </label>
                </div>

                <div class="half">
                    <label>Tipo
                        <div class="radio-label">
                            <label for="cliente">
                                <input <?php if($user[1] == 'cliente' || !$user[0]) echo 'checked' ?> type="radio" onchange="isFilled()" id="cliente" name="type" value="cliente">
                                Cliente
                            </label>
                            <label for="profissional">
                                <input class="mandatory <?php echo $class ?>" <?php if($user[1] == 'profissional') echo 'checked' ?> type="radio" onchange="isFilled()" id="profissional" name="type" value="profissional">
                                Profissional
                            </label>
                        </div>
                    </label>
                    <label>CPF ou CNPJ
                        <div class="radio-label">
                            <label for="cpf">
                                <input type="radio" <?php if($doc[1] == 'cpf' || !$doc[0]) echo 'checked'; ?> onchange="isFilled()" id="cpf" name="doc" value="cpf">
                                CPF
                            </label>
                            <label for="cnpj">
                                <input type="radio" <?php if($doc[1] == 'cnpj') echo 'checked' ?>  onchange="isFilled()" id="cnpj" name="doc" value="cnpj">
                                CNPJ
                            </label>
                        </div>
                    </label>
                </div>

                <div class="raised">
                    <label><span class="mandatory <?php echo $class ?>">*</span>N° do Documento
                        <input id="document" class="mandatory <?php echo $class ?>" type="number"   value="<?php echo $doc[0] ?>" min="10000000000" max="99999999999999" onchange="isFilled()">
                    </label>
                </div>

                <div class="half">
                    <label><span class="mandatory <?php echo $class ?>">*</span>Data de nascimento
                        <input id="data_nasc" class="mandatory <?php echo $class ?>" type="date" onchange="isFilled()">
                    </label>
                    <label><span class="mandatory <?php echo $class ?>">*</span>Telefone
                        <input id="tel" placeholder="900000000" class="mandatory <?php echo $class ?>" value="<?php echo $user[4] ?>" type="number" onchange="isFilled()">
                    </label>
                </div>

                <div class="half">
                    <label><span class="mandatory <?php echo $class ?>">*</span>Email
                        <input id="email" value="<?php echo $user[3] ?>" class="mandatory <?php echo $class ?>" type="email" onchange="isFilled()">
                    </label>
                    <label>Senha
                        <input id="senha" type="password" onchange="isFilled()">
                    </label>
                </div>

                <div class="half">
                    <label><span class="mandatory <?php echo $class ?>">*</span>Logradouro
                        <input id="logradouro" value="<?php echo $endereco[1] ?>" class="mandatory <?php echo $class ?>" type="text" onchange="isFilled()">
                    </label>
                    <label><span class="mandatory <?php echo $class ?>">*</span>Número
                        <input id="numero" value="<?php echo $endereco[6] ?>" class="mandatory <?php echo $class ?>" type="number" onchange="isFilled()">
                    </label>
                </div>

                <div class="half">
                    <label><span class="mandatory <?php echo $class ?>">*</span>Bairro
                        <input id="bairro" value="<?php echo $endereco[5] ?>" class="mandatory <?php echo $class ?>" type="text" onchange="isFilled()">
                    </label>
                    <label>Complemento
                        <input id="complemento" value="<?php echo $endereco[4] ?>" type="text" onchange="isFilled()">
                    </label>
                </div>

                <div class="half">
                    <label><span class="mandatory <?php echo $class ?>">*</span>CEP
                        <input id="cep" placeholder="00000000" value="<?php echo $endereco[2] ?>" class="mandatory <?php echo $class ?>" type="number" max="99999999" onchange="isFilled()">
                    </label>
                    <label><span class="mandatory <?php echo $class ?>">*</span>Município
                        <input id="municipio" value="<?php echo $endereco[3] ?>" class="mandatory <?php echo $class ?>" type="text" onchange="isFilled()">
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
                <button class="btnForm btnPrimary" onclick="sendToPHP('New', -1)">Salvar</button>
            </div>
        </div>
    </div>
    <footer>
        <h4>Desenvolvido por XDevs LTDA.</h4>
    </footer>
</body>

</html>