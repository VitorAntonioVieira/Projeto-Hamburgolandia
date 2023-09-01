<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/main.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Medula+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/pgstyle.css">
    <title>HAMBURGOLÂNDIA - Página Inicial</title>
</head>

<body>
    <!-- <nav>
        <div class="logo">
            <img src="img/logoHBGLD.png" alt="Logo">
        </div>
        <div class="hambu">
            <h1>HAMBURGOLÂNDIA</h1>
        </div>
    </nav> -->
    <nav>
        <img id="logo" src="img/LOGOG.png" alt="Logo">
        <div id="divBusca">
            <img src="img/2x/round_search_black_24dp.png" alt="">
            <input type="text" id="txtBusca" placeholder="Buscar por itens" />
        </div>
        <div id="logout">
            <span class="material-symbols-outlined">
                logout
            </span>
        </div>
    </nav>
    <div class="cores">
        <img id="cores" src="img/cores.png" alt="cores">
    </div>
    <div class="encaminhamentos">
        <ul>
            <li><a href="paginainicial.php">Produtos</a></li>
            <li><a href="#">Pedidos</a></li>
            <li><a href="prepagarçom.php">Em preparo</a></li>
        </ul>
    </div>

    <h1 id="h1preparo">Em Preparo</h1>
    <div class="pedido">
        <fieldset id="pedido1">
            <img id="pedidopreparo"src="img/xburguer.png" alt="simpleslândia">

        </fieldset>
    </div>
</body>
</html>