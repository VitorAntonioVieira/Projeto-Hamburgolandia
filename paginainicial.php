<?php 
    session_start();

    if($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) && $_SESSION['usuario_logado'] !== true){
        session_destroy();
        header('Location: index.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logos/3.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Medula+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/pgstyle.css">
    <script src="js/main.js"></script>
    <title>HAMBURGOLÂNDIA - Página Inicial</title>
</head>

<body>
    <nav>
        <img id="logo" src="img/logos/1.png" alt="Logo">
        <div class="search-container">
            <input type="text" placeholder="Pesquisar" class="search-box"><button id="mbl-sch" class="search-button"><span class="material-symbols-outlined">search</span></button></input>
            <button id="pc-sch" class="search-button"><span>Buscar</span></button>
        </div>
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
    <div class="encaminhamentos">
        <ul>
            <li><a href="paginainicial.php">Produtos</a></li>
            <li><a href="pedidos.php">Pedidos</a></li>
            <li><a href="prepagarcom.php">Em preparo</a></li>
        </ul>
    </div>
    
    <h1 class="grid-title no-select">LANCHES</h1>
    <div class="container-wraper">
        <div class="container no-select">
            <?php
                include 'includes/conexao.php';

                $sql_l = "SELECT * FROM produtos WHERE cat = 'lanche'";
                $query_lanches = $mysqli->query($sql_l) or die($mysqli->error);
                while($lanches = $query_lanches->fetch_assoc()){
                    if ($lanches['imagem'] !== ''){
            ?>
            <div class="fild">
                <fieldset class="box">
                    <?php echo '<img class="produto" src="'.$lanches['imagem'].'" alt="'.$lanches['nome'].'">
                    <h3>'.$lanches['nome'].'</h3>
                    <p>'.$lanches['preco'].'</p>';}
                    else {
                        echo '<img class="produto" src="/img/notdisp.png" alt="'.$lanches['nome'].'">
                        <h3>'.$lanches['nome'].'</h3>
                        <p>'.$lanches['preco'].'</p>';
                    }?>

<button id="openModal">Abrir Modal</button>

<!-- A modal -->
<div id="myModal" class="modal">

  <!-- Conteúdo da modal -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <?php
        // Aqui você pode incluir o conteúdo PHP que deseja exibir na modal
        echo "Conteúdo da modal gerado pelo PHP";
    ?>
  </div>

</div>

                </fieldset>
            </div>
            <?php } ?> 
        </div>
    </div>
    <h1 class="grid-title no-select">BEBIDAS</h1>
    <div class="container-wraper">
        <div class="container no-select">
            <?php
                $sql_b = "SELECT * FROM produtos WHERE cat = 'bebida'";
                $query_bebidas = $mysqli->query($sql_b) or die($mysqli->error);
                while($bebidas = $query_bebidas->fetch_assoc()){
            ?>
            <div class="fild">
                <fieldset class="box">
                    <?php echo '<img class="produto" src="'.$bebidas['imagem'].'" alt="'.$bebidas['nome'].'">
                    <h3>'.$bebidas['nome'].'</h3>
                    <p>'.$bebidas['preco'].'</p>';?>
                </fieldset>
            </div>
            <?php } ?>
        </div>
    </div>
    <h1 class="grid-title no-select">PORÇÕES</h1>
    <div class="container-wraper">
        <div class="container no-select">
            <?php
                $sql_p = "SELECT * FROM produtos WHERE cat = 'porcoe'";
                $query_porcoes = $mysqli->query($sql_p) or die($mysqli->error);
                while($porcoes = $query_porcoes->fetch_assoc()){
            ?>
            <div class="fild">
                <fieldset class="box">
                    <?php echo '<img class="produto" src="'.$porcoes['imagem'].'" alt="'.$porcoes['nome'].'">
                    <h3>'.$porcoes['nome'].'</h3>
                    <p>'.$porcoes['preco'].'</p>';?>
                </fieldset>
            </div>
            <?php } ?>
        </div>
    </div>
    <footer>
        ©HAMBURGOLÂNDIA · 2023
    </footer>
</body>
</html>