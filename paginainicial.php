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
        <div id="divBusca">
            <img src="img/2x/round_search_black_24dp.png" alt="">
            <input type="text" id="txtBusca" placeholder="Buscar por itens" />
        </div>
        <div id="logout">
            <a href="logout.php"><span class="material-symbols-outlined">
                logout
            </span></a>
        </div>
    </nav>
    <div class="cores">
        <img id="cores" src="img/cores.png" alt="cores">
    </div>
    <div class="encaminhamentos">
        <ul>
            <li><a href="paginainicial.php">Produtos</a></li>
            <li><a href="#">Pedidos</a></li>
            <li><a href="prepagarcom.php">Em preparo</a></li>
        </ul>
    </div>
    <h1 class="grid-title">LANCHES</h1>
    <div class="grid-container">
        <div class="mpedidos">
            <?php
                include 'includes/conexao.php';

                $sql = "SELECT * FROM lanches";
                $sql_exec = $mysqli->query($sql) or die($mysqli->error);
                while($lanches = $sql_exec->fetch_assoc()){
            ?>
            <div class="fild">
                <fieldset class="box">
                    <?php echo '<img class="produto" src="'.$lanches['imagem'].'" alt="'.$lanches['nome'].'">
                    <h3>'.$lanches['nome'].'</h3>
                    <p>'.$lanches['preco'].'</p>';?>
                </fieldset>
            </div>
            <?php } ?>
              
            <!-- <dialog>
            <h2>X-tudão</h2>
            <h3>Descrição</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt quaerat dolores quisquam accusamus animi, voluptatum hic nostrum, officia, sint aliquam nobis! Nemo, alias earum. Corrupti, iste. Itaque reiciendis veritatis pariatur!</p>
            <button class="adicionar">Adicionar Item</button>
        </dialog>

            <div class="fild">
                <fieldset class="box">
                    <img class="produto" src="img/xburguer.png" alt="Lanche xburguer">
                    <h3>Simpleslândia</h3>
                    <p>R$15,09</p>
                </fieldset>
            </div>
            <div class="fild">
                <fieldset class="box">
                    <img class="produto" src="img/xveg.png" alt="Vegslândia">
                    <h3>Vegslândia</h3>
                    <p>R$30,09</p>
                </fieldset>
            </div>
            <div class="fild">
                <fieldset class="box">
                    <img class="produto" src="img/xbacon.png" alt="Baconlândia">
                    <h3>Baconlândia</h3>
                    <p>R$35,09</p>
                </fieldset>
            </div>
            <div class="fild">
                <fieldset class="box">
                    <img class="produto" src="img/ovolândia.png" alt="Baconlândia">
                    <h3>Ovolândia</h3>
                    <p>R$28,09</p>
                </fieldset>
            </div>
            <div class="fild">
                <fieldset class="box">
                    <img class="produto" src="img/xfrango.png" alt="xfrango">
                    <h3>X-Frango</h3>
                    <p>R$30,09</p>
                </fieldset>
            </div>
            <div class="fild">
                <fieldset class="box">
                    <img class="produto" src="img/xsalada.png" alt="xsalada">
                    <h3>Salalândia</h3>
                    <p>R$27,09</p>
                </fieldset>
            </div> -->
        </div>
    </div>
    <h1 class="grid-title">BEBIDAS</h1>
    <div class="grid-container">
        <div class="bebi">

            <div class="fild">
                <fieldset class="box">
                    <img class="produto" src="img/guarana.png" alt="GuaranaAntartica">
                    <h3>Guaraná</h3>
                    <p>R$5,00</p>
                </fieldset>
            </div>
            <div class="fild">
                <fieldset class="box">
                    <img class="produto" src="img/cocacola.png" alt="CocaCola">
                    <h3>Coca-Cola</h3>
                    <p>R$6,00</p>
                </fieldset>
            </div>
            <div class="fild">
                <fieldset class="box">
                    <img class="produto" src="img/sprite.png" alt="Sprite">
                    <h3>Sprite</h3>
                    <p>R$5,00</p>
                </fieldset>
            </div>
            <div class="fild">
                <fieldset class="box">
                    <img class="produto" src="img/suco.png" alt="Suco morango">
                    <h3>Morangolândia</h3>
                    <p>R$10,00</p>
                </fieldset>
            </div>
            <div class="fild">
                <fieldset class="box">
                    <img class="produto" src="img/GarrafaAgua.png" alt="Garrafa de água">
                    <h3>Água</h3>
                    <p>R$4,00</p>
                </fieldset>
            </div>
            <div class="fild">
                <fieldset class="box">
                    <img class="produto" src="img/milkshake.png" alt="MilkShake de Chocolate">
                    <h3>Shakelate</h3>
                    <p>R$15,00</p>
                </fieldset>
            </div>
            <div class="fild">
                <fieldset class="box">
                    <img class="produto" src="img/milkshake2.png" alt="MilkShake de Morango">
                    <h3>Shakegolândia</h3>
                    <p>R$15,00</p>
                </fieldset>
            </div>
        </div>
    </div>
    <h1 class="grid-title">PORÇÕES</h1>
    <div class="grid-container">
        <div class="porço">
            <div class="fild">
                <fieldset class="box">
                    <img class="produto" src="img/batatafrita.png" alt="Porção de Batata">
                    <h3>Batatas</h3>
                    <p>R$15,00</p>
                </fieldset>
            </div>
            <div class="fild">
                <fieldset class="box">
                    <img class="produto" src="img/coxinhas.png" alt="Porção de Coxinhas">
                    <h3>Coxinhas</h3>
                    <p>R$17,00</p>
                </fieldset>
            </div>
            <div class="fild">
                <fieldset class="box">
                    <img class="produto" src="img/pastel.png" alt="Porção de Pastéis">
                    <h3>Pastéis</h3>
                    <p>R$19,00</p>
                </fieldset>
            </div>
            <div class="fild">
                <fieldset class="box">
                    <img class="produto" src="img/nuggets.png" alt="Porção de Nuggets">
                    <h3>Nuggets</h3>
                    <p>R$19,00</p>
                </fieldset>
            </div>
            <div class="fild">
                <fieldset class="box">
                    <img class="produto" src="img/onionrings.png" alt="Porção de anel de cebola">
                    <h3>Onion Rings</h3>
                    <p>R$15,00</p>
                </fieldset>
            </div>
            <div class="fild">
                <fieldset class="box">
                    <img class="produto" src="img/calabresa.png" alt="Porção de Calabresa">
                    <h3>Calabresa</h3>
                    <p>R$20,00</p>
                </fieldset>
            </div>
            <div class="fildfinal">
                <fieldset class="box">
                    <img class="produto" src="img/azeitona.png" alt="Porção de azeitona">
                    <h3>Azeitonas</h3>
                    <p>R$10,00</p>
                </fieldset>
            </div>
        </div>
    </div>
</body>

</html>