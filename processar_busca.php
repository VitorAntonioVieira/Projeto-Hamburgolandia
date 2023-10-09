<!DOCTYPE html>
<html>
<head>
    <title>Resultados da Busca</title>
</head>
<body>

    <?php
    if(isset($_POST['consulta'])) {
        $consulta = $_POST['consulta'];

        $servername = "seu_servidor";
        $username = "seu_usuario";
        $password = "sua_senha";
        $dbname = "seu_banco_de_dados";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM sua_tabela WHERE campo LIKE '%$consulta%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "ID: " . $row["id"]. " - Campo: " . $row["campo"]. "<br>";
            }
        } else {
            echo "Nenhum resultado encontrado";
        }

        $conn->close();
    }
    else {
        echo "Por favor, insira uma consulta.";
    }
    ?>

</body>
</html>
