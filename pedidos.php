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
    </nav>
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
    <h1 class="grid-title no-select">Pedidos</h1>

    <div class="containerpedidos">
        <div class="pedido">
            <fieldset class="pedido1">
                <img class="pedidopreparo1" src="img/xburguer.png" alt="simpleslândia">
                <div class="descricao">
                    <h2>X-Burger</h2>
                    <p>Mesa: 1</p>
                    <p>Observação: Retirar cebola</p>
                </div>
                <div class="botaofinalizar">
                    <button id="bfp" onclick="">Editar pedido</button>
                </div>
            </fieldset>
        </div>
        <div class="pedido">
            <fieldset class="pedido1">
                <img class="pedidopreparo1" src="img/xbacon.png" alt="simpleslândia">
                <div class="descricao">
                    <h2>Baconlândia</h2>
                    <p>Mesa: 4</p>
                    <p>Observação: Nenhuma</p>
                </div>
                <div class="botaofinalizar">
                    <button id="bfp" onclick="">Editar pedido</button>
                </div>
            </fieldset>
        </div>
        <div class="pedido">
            <fieldset class="pedido1">
                <img class="pedidopreparo1" src="img/xsalada.png" alt="simpleslândia">
                <div class="descricao">
                    <h2>Salalândia</h2>
                    <p>Mesa: 4</p>
                    <p>Observação: Nenhuma</p>
                </div>
                <div class="botaofinalizar">
                    <button id="bfp" onclick=""><span id="pc-done">Editar pedido</span><span
                    class="material-symbols-outlined" id="mobile-done">edit</span></button>
                </div>
            </fieldset>
        </div>
    </div>
    <footer>
        ©HAMBURGOLÂNDIA · 2023
    </footer>
</body>

</html>