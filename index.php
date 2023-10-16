<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME']) && $_SESSION['usuario_logado'] !== true) {
    session_destroy();
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logos/3.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Medula+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/pgstyle.css">
    <script src="js/main.js" defer></script>
    <script async src="js/pd.js"></script>
    <title>HAMBURGOLÂNDIA - Página Inicial</title>
</head>

<body>
    <nav>
        <img id="logo" src="img/logos/1.png" alt="Logo">
        <div class="search-container">
            <form action="busca.php" method="GET">
                <input type="text" name=nome_produto_hamburguer placeholder="Pesquisar" class="search-box"><button
                    id="mbl-sch" class="search-button"><span
                        class="material-symbols-outlined">search</span></button></input>
                <button id="pc-sch" class="search-button"><span>Buscar</span></button>
        </div>
        <div id="logout">
            <a href="logout.php">
                <span class="material-symbols-outlined">
                    logout
                </span>
            </a>
            <span onclick="modal();" class="material-symbols-outlined">
                shopping_cart_checkout
            </span>
        </div>
    </nav>
    <div class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="conteudo">
                <div id="descricao">
                    <h2 id="modal-title"></h2>
                    <p id="modal-desc"></h3>
                    <p id="modal-preco"></p>
                    <button class="add_cart" id="bap"> Adicionar item </button>
                </div>
                <div  id="modal-img">
                    <img id="mdlIMG" src="" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="cores">
        <img id="cores" src="img/cores.png" alt="cores">
    </div>
    <div class="encaminhamentos">
        <ul>
            <li><a href="index.php">Produtos</a></li>
            <li><a href="pedidos.php">Pedidos</a></li>
            <li><a href="prepagarcom.php">Em preparo</a></li>
            <li><a href="cadastro_produtos.php">Cadastro de Produtos</a></li>
        </ul>
    </div>

    <h1 class="grid-title no-select">LANCHES</h1>
    <div class="container-wraper">
        <div class="container no-select">
            <?php
            include 'includes/conexao.php';

            $sql_l = "SELECT * FROM produtos WHERE cat_produto = 'lanche'";
            $query_lanches = $mysqli->query($sql_l) or die($mysqli->error);
            while ($lanches = $query_lanches->fetch_assoc()) {
                if ($lanches['imagem_produto'] !== '') {
                    ?>
                    <div class="fild"
                        onclick="mostrarDetalhes('<?php echo $lanches['nome_produto'] ?>', '<?php echo $lanches['descricao_produto'] ?>', <?php echo $lanches['preco_produto'] ?>, '<?php echo $lanches['imagem_produto'] ?>')">
                        <fieldset class="box">
                            <?php echo '<img class="produto" src="' . $lanches['imagem_produto'] . '" alt="' . $lanches['nome_produto'] . '">
                    <h3>' . $lanches['nome_produto'] . '</h3>
                    <p>R$' . $lanches['preco_produto'] . '</p>';
                } else {
                    echo '<img class="produto" src="/img/notdisp.png" alt="' . $lanches['nome_produto'] . '">
                        <h3>' . $lanches['nome_produto'] . '</h3>
                        <p>R$' . $lanches['preco_produto'] . '</p>';
                }
                ?>
                    </fieldset>
                </div>
            <?php } ?>
        </div>
    </div>
    <h1 class="grid-title no-select">BEBIDAS</h1>
    <div class="container-wraper">

        <div class="container no-select">
            <?php
            $sql_b = "SELECT * FROM produtos WHERE cat_produto = 'bebida'";
            $query_bebidas = $mysqli->query($sql_b) or die($mysqli->error);
            while ($bebidas = $query_bebidas->fetch_assoc()) {
                ?>
                <div class="fild"
                    onclick="mostrarDetalhes('<?php echo $bebidas['nome_produto'] ?>', '<?php echo $bebidas['descricao_produto'] ?>', '<?php echo $bebidas['preco_produto'] ?>', '<?php echo $bebidas['imagem_produto'] ?>')">
                    <fieldset class="box">
                        <?php echo '<img class="produto" src="' . $bebidas['imagem_produto'] . '" alt="' . $bebidas['nome_produto'] . '">
                    <h3>' . $bebidas['nome_produto'] . '</h3>
                    <p>R$' . $bebidas['preco_produto'] . '</p>'; ?>
                    </fieldset>
                </div>
            <?php } ?>
        </div>
    </div>
    <h1 class="grid-title no-select">PORÇÕES</h1>
    <div class="container-wraper">
        <div class="container no-select">
            <?php
            $sql_p = "SELECT * FROM produtos WHERE cat_produto = 'porcoe'";
            $query_porcoes = $mysqli->query($sql_p) or die($mysqli->error);
            while ($porcoes = $query_porcoes->fetch_assoc()) {
                ?>
                <div class="fild"
                    onclick="mostrarDetalhes('<?php echo $porcoes['nome_produto'] ?>', '<?php echo $porcoes['descricao_produto'] ?>', '<?php echo $porcoes['preco_produto'] ?>', '<?php echo $porcoes['imagem_produto'] ?>')">
                    <fieldset class="box">
                        <?php echo '<img class="produto" src="' . $porcoes['imagem_produto'] . '" alt="' . $porcoes['nome_produto'] . '">
                    <h3>' . $porcoes['nome_produto'] . '</h3>
                    <p>R$' . $porcoes['preco_produto'] . '</p>'; ?>
                    </fieldset>
                </div>
            <?php } ?>
        </div>
    </div>
    <footer>
        ©HAMBURGOLÂNDIA · 2023
    </footer>
</body>

</html>