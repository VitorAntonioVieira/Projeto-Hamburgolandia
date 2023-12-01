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
    <script async src="js/pd.js"></script>
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
     
    </div>
</body>

</html>
<?php
include 'crudpedido.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["adicionar"])) {
        $produto = $_POST["produto"];
        $quantidade = $_POST["quantidade"];
        $preco = $_POST["preco"];

        adicionarPedido($produto, $quantidade, $preco);
    }
}

$pedidos = obterPedidos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Pedidos</title>
</head>
<body>
    <h1>Carrinho de Pedidos</h1>

    <form method="post" action="">
        <label for="produto">Produto:</label>
        <input type="text" name="produto" required>
        <br>

        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" required>
        <br>

        <label for="preco">Preço:</label>
        <input type="text" name="preco" required>
        <br>

        <input type="submit" name="adicionar" value="Adicionar Pedido">
    </form>

    <h2>Pedidos</h2>
    <ul>
        <?php foreach ($pedidos as $pedido): ?>
            <li>
                <?= $pedido["produto"] ?> - Quantidade: <?= $pedido["quantidade"] ?> - Preço: R$<?= number_format($pedido["preco"], 2) ?>
                <a href="editar.php?id=<?= $pedido["id"] ?>">Editar</a>
                <a href="excluir.php?id=<?= $pedido["id"] ?>">Excluir</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>