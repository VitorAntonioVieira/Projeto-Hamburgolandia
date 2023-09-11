<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/main.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Medula+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="pginicial/pgstyle.css">
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
    <div id="encaminhamentos">
        <ul class="minha-lista">
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
               <button id="bfp" onclick="">Finalizar pedido</button>
            </div>
        </fieldset>
    </div>

    <div class="pedido">
        <fieldset id="pedido1">
            <img id="pedidopreparo"src="img/xbacon.png" alt="baconlândia">
            <div class="descricao">
                <h2>Baconlândia</h2>
                <p>Mesa: 2</p>
                <p>Observação: Retirar tomate</p>
                <p>Tempo: 38m21s</p>
            </div>
            <div class="botaofinalizar">
               <button id="bfp" onclick="">Finalizar pedido</button>
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
               <button id="bfp" onclick="">Finalizar pedido</button>
            </div>
        </fieldset>

    </div>
    </div>
</body>

</html>