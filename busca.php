<?php
if (!isset($_GET['nome_hamburguer'])) {
	header("Location: index.php");
	exit;
}
 
$nome = "%".trim($_GET['nome_hamburguer'])."%";
 
$dbh = new PDO('mysql:host=127.0.0.1;dbname=bd_hamburgolandia', 'root', '');
 
$sth = $dbh->prepare('SELECT * FROM `usuarios` WHERE `nome` LIKE :nome');
$sth->bindParam(':nome', $nome, PDO::PARAM_STR);
$sth->execute();
 
$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
?>
 
<!DOCTYPE html>
<link rel="stylesheet" href="css/pgstyle.css">
<html>
<style>
		body {
			font-family: Arial, sans-serif;
			background-size: cover;
			margin: 0;
			padding: 0;
		}

		h2 {
			background-color:#F4E7E7; 
			padding: 10px;
		}

		label {
			display: block;
			background-color: #fff;
			margin: 10px;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		label:hover {
			background-color: #f0f0f0;
		}

		#no-results {
			color: #e47f21; 
		}
	</style>
<head>
    
	<title>Resultado da busca</title>
</head>
<body>
<nav>
        <img id="logo" src="img/logos/1.png" alt="Logo">
        <div class="search-container">
            <form action= "busca.php" method="GET">
            <input type="text" name=nome_hamburguer placeholder="Pesquisar" class="search-box"><button id="mbl-sch"
                class="search-button"><span class="material-symbols-outlined">search</span></button></input>
            <button id="pc-sch" class="search-button"><span>Buscar</span></button>
        </div>
        <div id="logout">
            <a href="logout.php">
                <span class="material-symbols-outlined">
                 
                </span>
            </a>
            <span onclick="modal();" class="material-symbols-outlined">
               
            </span>
        </div>
    </nav>
    <div class="cores">
        <img id="cores" src="img/cores.png" alt="cores">
    </div>
    <div class="encaminhamentos">
        <ul>
            <li><a href="index.php">Produtos</a></li>
            <li><a href="pedidos.php">Pedidos</a></li>
            <li><a href="prepagarcom.php">Em preparo</a></li>
            <li><a href="cadastro_pedidos.php">Cadastro de Pedidos</a></li>
        </ul>
    </div>
<h2>Resultado da busca</h2>
<?php
if (count($resultados)) {
	foreach($resultados as $Resultado) {
?>
<label><?php echo $Resultado['id']; ?> - <?php echo $Resultado['nome']; ?></label>
<br>
<?php
} } else {
?>
<label>Não foram encontrados resultados pelo termo buscado.</label>
<?php
}
?>
</body>
</html>
