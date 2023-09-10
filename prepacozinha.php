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
    <link rel="shortcut icon" href="img/logos/3.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Medula+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="pginicial/pgstyle.css">
    <script src="js/main.js"></script>
    <title>HAMBURGOLÂNDIA - Página Inicial</title>
</head>

<body>
    <nav>
        <div class="logo">
            <img src="img/logoHBGLD.png" alt="Logo">
        </div>
        <div class="hambu">
            <h1>HAMBURGOLÂNDIA</h1>
        </div>
    </nav>
    <div class="cores">
        <img id="cores" src="css/FOOTER.jpg" alt="cores">
    </div>
    <div>
        <ul id="encaminhamentos">
            <li><a href="paginainicial.html">Produtos</a></li>
            <li><a href="#">Pedidos</a></li>
            <li><a href="prepagarçom.html">Em preparo</a></li>
        </ul>
    </div>

    <h1 id="h1preparo">Em Preparo</h1>

    <div class="containerpedidos">
        
    <div class="pedido">
        <fieldset id="pedido1">
            <img id="pedidopreparo1"src="img/xburguer.png" alt="simpleslândia">
            <div class="descricao">
                <h2>Simpleslândia</h2>
                <p>Mesa: 1</p>
                <p>Observação: Retirar cebola</p>
                <p>Tempo: 38m21s</p>
            </div>
            <div class="botaofinalizar">
                <button id="bap" onclick="">Aceitar pedido</button>
                <button id="bep" onclick="">Entregar pedido</button>
            </div>
        </fieldset>
    </div>

    <div class="pedido">
        <fieldset id="pedido1">
            <img id="pedidopreparo1"src="img/xbacon.png" alt="baconlândia">
            <div class="descricao">
                <h2>Baconlândia</h2>
                <p>Mesa: 2</p>
                <p>Observação: Retirar tomate</p>
                <p>Tempo: 38m21s</p>
            </div>
            <div class="botaofinalizar">
                <button id="bap" onclick="">Aceitar pedido</button>
                <button id="bep" onclick="">Entregar pedido</button>
            </div>
        </fieldset>
    </div>
</div>
<div class="containerpedidos">
    <div class="pedido">
        <fieldset id="pedido1">
            <img id="pedidopreparo"src="img/xveg.png" alt="Vegslândia">
            <div class="descricao">
                <h2>Vegslândia</h2>
                <p>Mesa: 4</p>
                <p>Observação: </p>
                <p>Tempo: 45m04s</p>
            </div>
            <div class="botaofinalizar">
               <button id="bap" onclick="">Aceitar pedido</button>
               <button id="bep" onclick="">Entregar pedido</button>
            </div>
        </fieldset>

    </div>
    </div>
</body>

</html>