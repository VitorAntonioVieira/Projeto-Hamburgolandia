<?php
session_start();

if (!isset($_SESSION['usuario_logado'])) {
    header('Location: login.php');
    exit;
}

include 'includes/conexao.php';

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logos/3.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Medula+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/pgstyle.css">
    <script src="js/main.js" defer></script>
    <script async src="js/pd.js"></script>
    <script src="modalcarrinho.js"></script>
    <title>HAMBURGOLÂNDIA - Página Inicial</title>
</head>

<body>
    <nav>
        <img id="logo" src="img/logos/1.png" alt="Logo">
        <div class="search-container">
            <form action="busca.php" method="GET">
                <input type="text" name="nome_hamburguer" placeholder="Pesquisar" class="search-box"><button
                    id="mbl-sch" class="search-button"><span
                        class="material-symbols-outlined">search</span></button></input>
                <button id="pc-sch" class="search-button"><span>Buscar</span></button>
            </form>
        </div>
        <div id="logout">
            <span id="textologin">
                Bem-vindo,
                <?php echo $_SESSION['usuario_logado']; ?>
            </span>
            <a href="logout.php">
                <span class="material-symbols-outlined">
                    logout
                </span>
            </a>
        </div>
        <button id="openModalBtn">Abrir Carrinho</button>

    <div id="cartModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModalBtn">&times;</span>
            <h2>Carrinho de Compras</h2>
            <ul id="cartItems">
                <!-- Itens do carrinho serão exibidos aqui -->
            </ul>
        </div>
    </div>
    </nav>
    <div class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="conteudo">
                <div id="descricao">
                    <h2 id="modal-title"></h2>
                    <p id="modal-desc">
                        </h3>
                    <p id="modal-preco"></p>
                    <button onclick="" class="add_cart" id="bap"> Adicionar item </button>
                    <!-- <input type="hidden" name="id_modal" id="id_modal" value="">
                    <input type="submit" id="r-btn" value="Delete" data-id="item_id"> -->
                </div>

                <!-- <script>
                    document.getElementById("r-btn").addEventListener("click", function () {
                        if (confirm("Tem certeza de que deseja excluir este item?")) {
                            var idModal = document.getElementById("id_modal").value;
                            window.location.href = "delete_item.php?id=" + idModal;
                        }
                    });                    
                </script> -->
                <div id="modal-img">
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
            $sql_l = "SELECT * FROM produtos WHERE cat_produto = 'lanche'";
            $query_lanches = $mysqli->query($sql_l) or die($mysqli->error);
            while ($lanches = $query_lanches->fetch_assoc()) {
                if ($lanches['imagem_produto'] !== '') {
                    ?>
                    <div class="fild"
                        onclick="mostrarDetalhes('<?php echo $lanches['id_produto'] ?>','<?php echo $lanches['nome_produto'] ?>', '<?php echo $lanches['descricao_produto'] ?>', <?php echo $lanches['preco_produto'] ?>, '<?php echo $lanches['imagem_produto'] ?>')">
                        <fieldset class="box">
                            <?php echo '<img class="produto" src="' . $lanches['imagem_produto'] . '" alt="' . $lanches['nome_produto'] . '">
                    <h3>' . $lanches['nome_produto'] . '</h3>
                    <p>R$ ' . $lanches['preco_produto'] . '</p>
                    <input type="hidden" id="id-modal" value="' . $lanches['id_produto'] . '">';
                } else {
                    echo '<img class="produto" src="/img/notdisp.png" alt="' . $lanches['nome_produto'] . '">
                        <h3>' . $lanches['nome_produto'] . '</h3>
                        <p>R$ ' . $lanches['preco_produto'] . '</p>';
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
                    onclick="mostrarDetalhes('<?php echo $bebidas['id_produto'] ?>', '<?php echo $bebidas['nome_produto'] ?>', '<?php echo $bebidas['descricao_produto'] ?>', '<?php echo $bebidas['preco_produto'] ?>', '<?php echo $bebidas['imagem_produto'] ?>')">
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
                    onclick="mostrarDetalhes('<?php echo $porcoes['id_produto'] ?>', '<?php echo $porcoes['nome_produto'] ?>', '<?php echo $porcoes['descricao_produto'] ?>', '<?php echo $porcoes['preco_produto'] ?>', '<?php echo $porcoes['imagem_produto'] ?>')">
                    <fieldset class="box">
                        <?php echo '<img class="produto" src="' . $porcoes['imagem_produto'] . '" alt="' . $porcoes['nome_produto'] . '">
                    <h3>' . $porcoes['nome_produto'] . '</h3>
                    <p>R$' . $porcoes['preco_produto'] . '</p>'; ?>
                    </fieldset>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="cart-box">
        <div>
            <div>
                <span class="material-symbols-outlined">
                    shopping_bag
                </span>
            </div>
            <div>

            </div>
        </div>
        <div>
            <span>Ver sacola</span>
        </div>
        <span id="modal-preço">R$00.00</span>
    </div>
    <footer>
        ©HAMBURGOLÂNDIA · 2023
    </footer>
</body>

</html>