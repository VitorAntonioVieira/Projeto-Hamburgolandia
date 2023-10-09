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
    <script src="js/barrapesquisa.js"></script>
    <title>HAMBURGOLÂNDIA - Página Inicial</title>
</head>

<body>
    <nav>
        <img id="logo" src="img/logos/1.png" alt="Logo">
        <div class="search-container">
            <input type="text" placeholder="Pesquisar" class="search-box"><button id="mbl-sch"
                class="search-button"><span class="material-symbols-outlined">search</span></button></input>
            <button id="pc-sch" class="search-button"><span>Buscar</span></button>
        </div>
        <div id="logout">
            <a href="logout.php">
                <span class="material-symbols-outlined">
                    logout
                </span>
            </a>
            <span id="cart" onclick="modal();" class="material-symbols-outlined">
                shopping_cart_checkout
            </span>
        </div>
    </nav>
    <div class="cores">
        <img id="cores" src="img/cores.png" alt="cores">
    </div>
    <div class="encaminhamentos">
        <ul>
            <li><a href="index.php">Produtos</a></li>
            <li><a href="pedidos.php">Pedidos</a></li>
            <li><a href="prepagarcom.php">Em preparo</a></li>
            <li><a href="cadastro_pedidos.php">Cadastro de Pedidos</a></li>
        </ul>
    </div>

    <h1 class="grid-title no-select">LANCHES</h1>
    <div class="container-wraper">
        <div class="container no-select">
            <?php
            include 'includes/conexao.php';

            $sql_l = "SELECT * FROM produtos WHERE cat = 'lanche'";
            $query_lanches = $mysqli->query($sql_l) or die($mysqli->error);
            while ($lanches = $query_lanches->fetch_assoc()) {
                if ($lanches['imagem'] !== '') {
                    ?>
                    <div class="fild"
                        onclick="mostrarDetalhes('<?php echo $lanches['nome'] ?>', '<?php echo $lanches['descricao'] ?>', <?php echo $lanches['preco'] ?>, '<?php echo $lanches['imagem'] ?>')">
                        <fieldset class="box">
                            <?php echo '<img class="produto" src="' . $lanches['imagem'] . '" alt="' . $lanches['nome'] . '">
                    <h3>' . $lanches['nome'] . '</h3>
                    <p>R$' . $lanches['preco'] . '</p>';
                } else {
                    echo '<img class="produto" src="/img/notdisp.png" alt="' . $lanches['nome'] . '">
                        <h3>' . $lanches['nome'] . '</h3>
                        <p>R$' . $lanches['preco'] . '</p>';
                } ?>

                    <div class="fild" onclick="<?php $lanches['id'] ?>">

                    <div class="fild">

                    <div class="fild" onclick="mostrarDetalhes('<?php echo$lanches['nome'] ?>', '<?php echo$lanches['descricao'] ?>', <?php echo$lanches['preco'] ?>, '<?php echo$lanches['imagem'] ?>')">
                        <fieldset class="box">
                            <?php echo '<img id="openModal" class="produto" src="' . $lanches['imagem'] . '" alt="' . $lanches['nome'] . '">
                            <h3>' . $lanches['nome'] . '</h3>
                            <p>' . $lanches['preco'] . '</p>';
                        }?>
                    </fieldset>
                </div>
                <div id="myModal" class="modal">
                    <!-- Conteúdo da modal -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <div id="conteudo">
                            <div id="foto">
                                <img id="imgg" src="">
                            </div>
                        <div id="descricao">
                            <h2>presente</h2>
                            <h3>descrição</h3>
                            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore facere in dolorum rem exercitationem, porro veritatis illum animi aspernatur quo repellat aliquid nemo ratione delectus doloremque accusamus inventore libero perspiciatis.]</p>
                            <button id="add"> Adicionar item </button>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    var modal = document.getElementById('myModal');
                    var btn = document.getElementById("openModal");
                    var span = document.getElementsByClassName("close")[0];
                    btn.onclick = function() {
                        modal.style.display = "block";
                    }

                    span.onclick = function() {
                        modal.style.display = "none";
                    }

                    // Fecha a modal quando se clica fora dela
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                </script>
    <!-- <div class="modal-content">
        <span class="close">&times;</span>
        <div id="conteudo"> 
            <div id="descricao">
                <h2>presente</h2>
                <h3>descrição</h3>
                <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore facere in dolorum rem exercitationem, porro veritatis illum animi aspernatur quo repellat aliquid nemo ratione delectus doloremque accusamus inventore libero perspiciatis.]</p>
                <button id="add"> Adicionar item </button>
            </div>
        </div>
    </div> -->

           

        </div>
    </div>
    <h1 class="grid-title no-select">BEBIDAS</h1>
    <div class="container-wraper">

        <div class="container no-select">
            <?php
            $sql_b = "SELECT * FROM produtos WHERE cat = 'bebida'";
            $query_bebidas = $mysqli->query($sql_b) or die($mysqli->error);
            while ($bebidas = $query_bebidas->fetch_assoc()) {
                ?>
                <div class="fild"
                    onclick="mostrarDetalhes('<?php $bebidas['nome'] ?>', '<?php $bebidas['descricao'] ?>', '<?php $lanches['preco'] ?>', '<?php $bebidas['imagem'] ?>')">
                    <fieldset class="box">
                        <?php echo '<img class="produto" src="' . $bebidas['imagem'] . '" alt="' . $bebidas['nome'] . '">
                    <h3>' . $bebidas['nome'] . '</h3>
                    <p>R$' . $bebidas['preco'] . '</p>'; ?>
                    </fieldset>

                </div>

            </div>
        </div>
    <?php } ?>
    </div>
    </div>
    <h1 class="grid-title no-select">PORÇÕES</h1>
    <div class="container-wraper">
        <div class="container no-select">
            <?php
            $sql_p = "SELECT * FROM produtos WHERE cat = 'porcoes'";
            $query_porcoes = $mysqli->query($sql_p) or die($mysqli->error);
            while ($porcoes = $query_porcoes->fetch_assoc()) {
                ?>
                <div class="fild"
                    onclick="mostrarDetalhes('<?php $porcoes['nome'] ?>', '<?php $porcoes['descricao'] ?>', '<?php $porcoes['preco'] ?>', '<?php $porcoes['imagem'] ?>')">
                    <fieldset class="box">
                        <?php echo '<img class="produto" src="' . $porcoes['imagem'] . '" alt="' . $porcoes['nome'] . '">
                    <h3>' . $porcoes['nome'] . '</h3>
                    <p>R$' . $porcoes['preco'] . '</p>'; ?>
                    </fieldset>
                </div>
            <?php } ?>
        </div>
    </div>
    <footer>
        ©HAMBURGOLÂNDIA · 2023
    </footer>
</body>
<script>
    var search = document.getElementById('mbl-sch');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'index.php?search='+search.value;
    }
</script>

</html>