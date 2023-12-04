<?php
session_start();

if (!isset($_SESSION['usuario_logado'])) {
    header('Location: login.php');
    exit;
}

include 'includes/conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $categoria = $_POST["categoria"];
    $preco = $_POST["valor"];
    $imagem = $_POST["imagem"];
    $status = $_POST["status"];

    $sql = "INSERT INTO produtos (nome_produto,descricao_produto,cat_produto,preco_produto,imagem_produto,status_produto) VALUES ('$nome', '$descricao', '$categoria', '$preco', '$imagem', '$status')";
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
    <div class="encaminhamentos">
        <ul>
            <li><a href="index.php">Produtos</a></li>
            <li><a href="adicionarpedido.php">Fazer Pedido</a></li>
            <li><a href="redefinir.php">Editar Conta</a></li>
            <li><a href="cadastro_produtos.php">Cadastro de Produtos</a></li>
            <li><a href="preparos.php">A Preparo</a></li>
        </ul>
    </div>
    </div>
    <h1 class="grid-title no-select">Cadastro de Produtos</h1>

    <div class="containerpedidos centro">
        <div class="corpo">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <!-- Input para o nome do produto -->
                <div class="label-float">
                    <input name="nome" type="text" placeholder=" " required>
                    <label>Nome do Produto</label>
                </div>
                
                <!-- Input para a descrição -->
                <div class="label-float">
                    <input style="resize: none" name="descricao" type="text" placeholder=" " required>
                    <label>Descrição</label>
                </div>
                
                <!-- Input para o preço -->
                <div class="label-float">
                    <input name="valor" type="number" step="0.01" placeholder=" " required>
                    <label>Preço</label>
                </div>
                
                <!-- Seu código para os outros inputs aqui... -->
                <div class="label-float">
                    <select class="select-estilizado" name="status" required>
                        <option value="" disabled selected>Selecione o Status</option>
                        <option value="ativo">Produto Disponível no Cardápio</option>
                        <option value="inativo">Produto Insdisponível no Cardápio</option>
                    </select>
                </div>
                <div class="label-float">
                    <select class="select-estilizado" name="categoria" required>
                        <option value="" disabled selected>Selecione a Categoria</option>
                        <option value="lanche">Lanche</option>
                        <option value="bebida">Bebida</option>
                        <option value="porcoe">Porção</option>
                    </select>
                </div>
                <div class="label-float">
                    <input name="imagem" type="text" placeholder=" " required>
                    <label>URL da Imagem</label>
                </div>
                <!-- Botão de enviar -->
                <div class="botao">
                    <input type="submit" value="Cadastrar Produto" id="botaologin">
                </div>
            </form>
        </div>
    </div>
    <footer>
        ©HAMBURGOLÂNDIA · 2023
    </footer>
</body>

</html>