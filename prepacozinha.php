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
    <nav>
        
        <img id="logo" src="img/logos/1.png" alt="Logo">
        
    <div class="search-container">
        <input type="text" placeholder="Pesquisar" class="search-box">
        <button class="search-button">Buscar</button>
      </div>
      <div id="logout">
            <a href="logout.php"><span class="material-symbols-outlined">
                logout
            </span></a>
        </div>
    </nav>
    <div class="cores">
        <img id="cores" src="img/cores.png" alt="cores">
    </div>
    <div class="encaminhamentos">
        <ul>
    
            <li><a href="paginainicial.php">Produtos</a></li>
            <li><a href="#">Pedidos</a></li>
            <li><a href="prepagarcom.php">Em preparo</a></li>
            <li><a href="prepacozinha.php">Cozinha</a></li>
            <li><a href=>Os mais pedidos</a></li>
            <li><a href=>Novidades</a></li>
          
        </ul>
</div>
    <h1 id="h1preparo">Em Preparo Cozinha</h1>

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
               <button id="bup" onclick="">Iniciar </button>
               <button id="bap" onclick="">Finalizar</button>
            </div>
            
        </fieldset>
    </div>
    
</body>
</html>
          
</html>