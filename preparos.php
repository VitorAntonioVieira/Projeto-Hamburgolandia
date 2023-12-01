<?php
include 'includes/conexao.php'

?>
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
    <link rel="stylesheet" href="css/cadastropedido.css">
    <script src="js/main.js" defer></script>
    <script async src="js/pd.js"></script>
    <title>HAMBURGOLÂNDIA - Página Inicial</title>
</head>

<body>
    <nav>
        <img id="logo" src="img/logos/1.png" alt="Logo">
        <div class="search-container">
            <form action="busca.php" method="GET">
                <input type="text" name="nome_hamburguer" placeholder="Pesquisar" class="search-box"><button
                    id="mbl-sch" class="search-button"><span
                        class="material-symbols-outlined">search</span></button></input>
                <button id="pc-sch" class="search-button"><span>Buscar</span></button>
            </form>
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
    <h1 class="grid-title no-select">Pedidos</h1>
    <?php 
    $sql_l = "SELECT * FROM pedidos";
    $result = $mysqli->query($sql_l);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<th>Mesa</th><th>Garçom</th><th>Produto</th><th>Quantidade</th><th>Observações</th>";
        
        // Exibindo os dados
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["mesa_pedido"] . "</td>";
            echo "<td>" . $row["garcompedido"] . "</td>";
            echo "<td>" . $row["produtopedido"] . "</td>";
            echo "<td>" . $row["quantidade_pedido"] . "</td>";
            echo "<td>" . $row["obs_pedido"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
    ?>
    
    <footer>
        ©HAMBURGOLÂNDIA · 2023
    </footer>
</body>

</html>