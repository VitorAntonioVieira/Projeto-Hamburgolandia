<?php
include 'includes/conexao.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mesa = $_POST["mesa"];
    $garcom = $_POST["garcom"];
    $produto = $_POST["produto"];
    $quantidade = $_POST["quantidade"];
    $descricao = $_POST["descricao"];
   
    $sql = "INSERT INTO pedidos (mesa_pedido,garcompedido,produtopedido,quantidade_pedido,obs_pedido) VALUES ('$mesa', '$garcom', '$produto', '$quantidade', '$descricao')";
    $mysqli->query($sql);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/main.js"></script>
    <link rel="shortcut icon" href="img/logos/3.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Medula+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/cadastropedido.css">
    <script src="/js/botao.js"></script>
    <script src="/js/barrapesquisa.js"></script>
    <title>HAMBURGOLÂNDIA - Página Inicial</title>
</head>

<body>
    <nav>
        <img id="logo" src="img/logos/1.png" alt="Logo">
        <div class="search-container">
            <form action="busca.php" method="GET">
                <input type="text" name=nome_hamburguer placeholder="Pesquisar" class="search-box"><button id="mbl-sch"
                    class="search-button"><span class="material-symbols-outlined">search</span></button></input>
                <button id="pc-sch" class="search-button"><span>Buscar</span></button>
            </form>
        </div>
        <div id="logout">
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
            <li><a href="adicionarpedido.php">Fazer Pedido</a></li>
            <li><a href="redefinir.php">Editar Conta</a></li>
            <li><a href="cadastro_produtos.php">Cadastro de Produtos</a></li>
            <li><a href="preparos.php">A Preparo</a></li>
        </ul>
    </div>
    <h1 class="grid-title no-select">Cadastro de Produtos</h1>

    <div class="containerpedidos centro">
        <div class="corpo">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <!-- Input para o nome do produto -->
                <div class="label-float">
                    <input name="mesa" type="text" placeholder=" " required>
                    <label>Mesa</label>
                </div>
                
                <!-- Input para a descrição -->
                <div class="label-float">
                    <input style="resize: none" name="garcom" type="text" placeholder=" " required>
                    <label>Garçom</label>
                </div>
                
                <!-- Input para o preço -->
                <div class="label-float">
                    <input name="produto" type="text" step="0.01" placeholder=" " required>
                    <label>Produto</label>
                </div>
               <div class="label-float">
                    <input name="quantidade" type="number" placeholder=" " required>
                    <label>Quantidade</label>
                </div>
                <div class="label-float">
                    <input name="descricao" type="text" step="0.01" placeholder=" " required>
                    <label>Observações</label>
                </div>
                <div class="botao">
                    <input type="submit" value="Cadastrar Pedido" id="botaologin">
                </div>
            </form>
        </div>
    </div>
    <footer>
        ©HAMBURGOLÂNDIA · 2023
    </footer>
</body>

</html>