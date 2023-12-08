<?php
// Conectar ao banco de dados e outras configurações, se necessário

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $idPedido = $_GET['id'];

    // Execute a consulta DELETE para excluir o pedido com o ID especificado
    $sql = "DELETE FROM pedidos WHERE id_pedido = $idPedido";

    if ($mysqli->query($sql) === TRUE) {
        echo "Pedido excluído com sucesso.";
    } else {
        echo "Erro ao excluir pedido: " . $mysqli->error;
    }
} else {
    echo "ID de pedido inválido.";
}

// Fechar a conexão, se necessário
?>
























































