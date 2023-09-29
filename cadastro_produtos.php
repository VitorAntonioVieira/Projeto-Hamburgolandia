<?php 
    session_start();

    if($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) && $_SESSION['usuario_logado'] !== true){
        session_destroy();
        header('Location: index.php');
        exit;
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/cadastropedido.css">
    <script src="/js/botao.js"></script>
    <title>HAMBURGOLÂNDIA - Página Inicial</title>
</head>

<body>
    <nav>
        <img id="logo" src="img/logos/1.png" alt="Logo">
        <div class="search-container">
            <input type="text" placeholder="Pesquisar" class="search-box"><button id="mbl-sch" class="search-button"><span class="material-symbols-outlined">search</span></button></input>
            <button id="pc-sch" class="search-button"><span>Buscar</span></button>
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
            <li><a href="paginainicial.php">Produtos</a></li>
            <li><a href="pedidos.php">Pedidos</a></li>
            <li><a href="prepagarcom.php">Em preparo</a></li>
            <li><a href="cadastro_produtos.php">Cadastro de Produtos</a></li>
            <!-- <li><a href="prepacozinha.php">Cozinha</a></li>            -->
        </ul>
    </div>
    <h1 class="grid-title no-select">Cadastro de Pedidos</h1>

    <div class="containerpedidos">   
        <div class="corpo">
        <fieldset>
            <div class="label-float">
                    <input name="nomepedido" type="text" placeholder=" " required>
                    <label>Nome do Pedido</label>
                </div>
                <div class="label-float">
                    <textarea style="resize: none" name="descricao" type="text" placeholder=" " required> </textarea>
                    <label>Descrição</label>
                <div class="label-float">
                    <input name="valor" type="number" step="0.01" placeholder=" " required>
                    <label>Preço</label>
                </div><br>
                <div>
                <input type="file" name="imagem" accept="image/*" placeholder="Insira aqui a imagem">
                </div>
                <div class="botao">
                    <input type="submit" value="Cadastrar Pedido" id="botaologin">
                </div>
            </form>
        </fieldset>
        </div>
    </div>
    <footer>
        ©HAMBURGOLÂNDIA · 2023
    </footer>
</body>
</html>