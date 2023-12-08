<?php
include 'includes/conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user = $_POST['user'];
    $_POST['n-senha'] == $_POST['c-senha'] ? $n_senha = password_hash($_POST['n-senha'], PASSWORD_DEFAULT) : header('Location: redefinir.php');

    $sql = "UPDATE usuarios SET senha = '$n_senha' WHERE user = '$user'";
    $sql_exec = $mysqli->query($sql) or die($mysqli->error);

    sleep(1);
    header('Location: index.php');
}
$mysqli->close();
// }
?>

<?php
session_start();
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
        <?php
        if (isset($_SESSION['usuario_logado'])) {
            echo `<img id="logo" src="img/logos/1.png" alt="Logo" onClick="document.location.href='login.php'">`;
            echo 'Hello World!';
        } else {
            echo `<img id="logo" src="img/logos/1.png" alt="Logo" onClick="document.location.href='index.php'">`;
        }
        ?>
    </nav>
    <div class="corpo">
        <div class="field">
            <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post" class="login">
                <h2 id="h2login">Redefina sua senha:</h2>
                <div class="label-float">
                    <input name="user" type="text" placeholder=" " required>
                    <label>Nome de Usuário</label>
                </div>
                <div class="label-float">
                    <input name="n-senha" type="password" placeholder=" " required>
                    <label>Nova senha</label>
                </div>
                <div class="label-float">
                    <input name="c-senha" type="password" placeholder=" " required>
                    <label>Confirmar Senha</label>
                </div>
                <div class="botao">
                    <input type="submit" value="LOGIN" id="botaologin">
                </div>
                <br>
            </form>
        </div>
    </div>
</body>

</html>