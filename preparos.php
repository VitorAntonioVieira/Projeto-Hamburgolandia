<?php
session_start();

if (!isset($_SESSION['usuario_logado'])) {
    header('Location: login.php');
    exit;
}

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

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['excluir']) && is_numeric($_GET['excluir'])) {
    $idPedido = $_GET['excluir'];

    // Executa a consulta DELETE para excluir o pedido com o ID especificado
    $sql = "DELETE FROM pedidos WHERE id_pedido = $idPedido";

    if ($mysqli->query($sql) === TRUE) {
        echo "Pedido excluído com sucesso.";
    } else {
        echo "Erro ao excluir pedido: " . $mysqli->error;
    }
}
$sql_l = "SELECT * FROM pedidos";
$result = $mysqli->query($sql_l);

// Exibe a tabela
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<th>Mesa</th><th>Garçom</th><th>Produto</th><th>Quantidade</th><th>Observações</th><th>Excluir</th>";

    // Exibindo os dados
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["mesa_pedido"] . "</td>";
        echo "<td>" . $row["garcompedido"] . "</td>";
        echo "<td>" . $row["produtopedido"] . "</td>";
        echo "<td>" . $row["quantidade_pedido"] . "</td>";
        echo "<td>" . $row["obs_pedido"] . "</td>";
        echo "<td><button class='botao-excluir-pedido' data-id='{$row['id_pedido']}'><span class='material-symbols-outlined'>delete</span></button></td>";
        echo "</tr>";
    }

    echo "</table>";
}

// Fecha a conexão
$mysqli->close();
?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var buttons = document.getElementsByClassName("botao-excluir-pedido");
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function() {
            var id = this.getAttribute("data-id");
            var confirmacao = confirm("Tem certeza que deseja excluir este pedido?");
            if (confirmacao) {
                window.location.href = "index.php?excluir=" + id;
            }
        });
    }
});
</script>

    <footer>
        ©HAMBURGOLÂNDIA · 2023
    </footer>
</body>

</html>