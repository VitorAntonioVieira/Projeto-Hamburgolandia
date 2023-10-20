<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    include 'includes/conexao.php';

    // Execute a consulta de exclusão
    $sql = "DELETE FROM produtos WHERE id_produto = $id";
    $mysqli->query($sql);

    
    if (isset($_GET['id'])) {
        // Aqui, você processa a exclusão do item com base no ID recebido, por exemplo, usando um banco de dados.
        // Após a exclusão ser bem-sucedida, você pode exibir uma mensagem de confirmação como um alert.
    
        // Exemplo de código para exibir uma mensagem de confirmação como um alert:
        echo "<script>alert('Item excluído com sucesso!'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Erro ao excluir o item.'); window.location.href = 'index.php';</script>";
    }
  
    
    $mysqli->close();
} else {
    echo "ID não especificado na URL ou método de requisição inválido.";
}
?>

























































