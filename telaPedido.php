<?php 
    session_start();

    if($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) && $_SESSION['usuario_logado'] !== true){
        session_destroy();
        header('Location: index.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/pd.css">
    <script src="js/pd.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Medula+One&display=swap" rel="stylesheet">
    <title>HAMBURGOLÂNDIA</title>
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
        <img id="cores" src="img/FOOTER.jpg" alt="cores">
    </div>
    <div id="abas" class="abas">
        <ul>
             <li><a href="#Produtos">Produtos</a></li>
             <li><a href="#Pedidos">Pedidos</a></li>
             <li><a href="#EmPreparo">Em Preparo</a></li>
        </ul>
    </div>

    <div class="corpo">
        <fieldset>
            <div>
                <img id="produto" src="img/xburguer.png" alt="xburguer">
            </div>
            <div class="quadrado">
                <h1 id="lanche">Simpleslândia</h1>
                <div>
                    <p>Serve 1 pessoa.Pão italiano com gergilin, hamburguer artesanal (90g), queijo cheddar e ketchup
                    </p>
                    <div class="contador">
                        <button class="botao" id="decremento">-</button>
                        <div class="valor" id="contador">0</div>
                        <button class="botao" id="incremento">+</button>

                    </div>
                </div>
            </div>
        </fieldset>
</body>

</html>