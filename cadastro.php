<?php
session_start();

if($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) && $_SESSION['usuario_logado'] !== true){
    session_destroy();
    header('Location: index.php');
    exit;
}

include 'includes/conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'];
    $data_nasc = $_POST['data_nasc'];
    $cpf = password_hash($_POST['cpf'], PASSWORD_DEFAULT);
    $filial = $_POST['filial'];
    $email = $_POST['email'];
    $user = $_POST['user'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $mysqli->query("INSERT INTO usuarios (nome, email, senha, data_nasc, cpf, user, filial) VALUES ('$nome', '$email', '$senha', '$data_nasc', '$cpf', '$user', '$filial')");
    // $stmt = $mysqli->prepare($sql);
    // $stmt->bind_param("ssssiss", $nome, $email, $senha, $data_nasc, $cpf, $user, $filial);
    // $stmt->execute();

    header ("Location: index.php");   
    exit();
}
// $mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logos/3.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Medula+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/main.js"></script>
    
    <title>HAMBURGOLÂNDIA - Controlador de Pedidos</title>
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
    <div class="corpo">
        <div class="field">
            <form action='<?php $_SERVER["PHP_SELF"]; ?>' method="post" class="login">
                <h2 id="h2login">Cadastro de colaboradores:</h2>
                <div class="label-float">
                    <input name="nome" type="text" placeholder=" " required>
                    <label>Nome do Colaborador</label>
                </div>
                <div class="label-float">
                    <input name="data_nasc" type="date" placeholder=" " required>
                    <label>Data de Nascimento</label>
                </div>
                <div class="label-float">
                    <input name="cpf" type="text" placeholder=" " required>
                    <label>CPF</label>
                </div>
                <div class="label-float">
                    <select id="filial" name="filial" placeholder=" " required>
                        <option value="" disabled>Selecione uma opção...</option>
                        <option value="cacapava">Caçapava</option>
                        <option value="taubate">Taubaté</option>
                        <option value="sanja">São José do Campos</option>
                        <option value="lagoinha">Lagoinha</option>
                    </select>
                </div>
                <div class="label-float">
                    <input name="email" type="email" placeholder=" " required>
                    <label>Email</label>
                </div>
                <div class="label-float">
                    <input name="user" type="text" placeholder=" " required>
                    <label>Nome de usuário</label>
                </div>
                <div class="label-float">
                    <input name="senha" type="password" placeholder=" " required>
                    <label>Senha</label>
                </div>
                <div class="botao">
                    <input type="submit" value="CADASTRAR" id="botaologin">
                </div>
            </form>
        </div>
    </div>
</body>

</html>