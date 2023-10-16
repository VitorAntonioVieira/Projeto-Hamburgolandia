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
    <link rel="stylesheet" href="css/carrinho.css">
    <script src="js/main.js" defer></script>
    <script src="js/barrapesquisa.js"></script>
    <title>HAMBURGOLÂNDIA - Página Inicial</title>
</head>

<body>
    <nav>
        <img id="logo" src="img/logos/1.png" alt="Logo">
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
    <h1 id="pedido">Seu Pedido</h1>
    <h3 id="pedido-desc">Aqui estão os produtos selecionados, você pode excluí-los e edita-los.</h3>
    <div class="itens">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <?php foreach ($productsInCart as $product): ?>
                <div class="cart-img">
                    <img src="<?php echo $product->getImage(); ?>" alt="<?php echo $product->getName(); ?>">
                </div>
                <div class="info">
                    <h2>
                        <?php echo $product->getName(); ?>
                    </h2>
                    <p>
                        <?php echo $product->getPrice(); ?>
                    </p>
                    <div class="label-float">
                        <input type="text" placeholder=" " required>
                        <label>Observações</label>
                    </div>
                    
                </div>
            <?php endforeach; ?>
        </form>
    </div>
</body>

</html>