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
        <img id="logo" src="img/logos/1.png" alt="Logo">
    </nav>
    <!-- <div class="cores">
        <img id="cores" src="img/cores.png" alt="cores">
    </div> -->
    <div class="corpo">
        <div class="field">
            <form action="processar_login.php" method="post" class="login">
                <h2 id="h2login">Inicie sua Sessão</h2>
                <div class="label-float">
                    <input name="user" type="text" placeholder=" " required>
                    <label>Nome de Usuário</label>
                </div>
                <div class="label-float">
                    <input name="email" type="email" placeholder=" " required>
                    <label>Email</label>
                </div>
                <div class="label-float">
                    <select id="filial" name="filial" placeholder=" Escolha a filial" required>
                        <option value="" disabled selected>Selecione uma opção...</option>
                        <option value="cacapava">Caçapava</option>
                        <option value="taubate">Taubaté</option>
                        <option value="sanja">São José do Campos</option>
                        <option value="lagoinha">Lagoinha</option>
                    </select>
                    <!-- <label>Escolha a filial</label> -->
                </div>
                <div class="label-float">
                    <input name="senha" type="password" placeholder=" " required>
                    <label>Senha</label>
                </div>
                <div class="botao">
                    <input type="submit" value="LOGIN" id="botaologin">
                </div>
            </form>
            <span class="fgt-pss">Esqueceu sua senha?<a href="redefinir.php"> Redefina Aqui</a></span>
        </div>
    </div>
    <div class="corpo-mbl">
    <form action="processar_login.php" method="post" class="login">
                <h2 id="h2login">Inicie sua Sessão</h2>
                <div class="label-float">
                    <input name="user" type="text" placeholder=" " required>
                    <label>Nome de Usuário</label>
                </div>
                <div class="label-float">
                    <input name="email" type="email" placeholder=" " required>
                    <label>Email</label>
                </div>
                <div class="label-float">
                    <select id="filial" name="filial" placeholder=" Escolha a filial" required>
                        <option value="" disabled selected>Selecione uma opção...</option>
                        <option value="cacapava">Caçapava</option>
                        <option value="taubate">Taubaté</option>
                        <option value="sanja">São José do Campos</option>
                        <option value="lagoinha">Lagoinha</option>
                    </select>
                    <!-- <label>Escolha a filial</label> -->
                </div>
                <div class="label-float">
                    <input name="senha" type="password" placeholder=" " required>
                    <label>Senha</label>
                </div>
                <div class="botao">
                    <input type="submit" value="LOGIN" id="botaologin">
                </div>
            </form>
            <span class="fgt-pss">Esqueceu sua senha?<a href="redefinir.php"> Redefina Aqui</a></span>
    </div>
</body>

</html>