<?php
if (!isset($_GET['nome_hamburguer'])) {
	header("Location: index.php");
	exit;
}

$nome = "%" . trim($_GET['nome_hamburguer']) . "%";

include "includes/conexao.php";

$sth = $mysqli->query("SELECT * FROM `produtos` WHERE `nome_produto` LIKE '$nome'") or die($mysqli->error);

?>

<!DOCTYPE html>
<link rel="stylesheet" href="css/pgstyle.css">
<html>

<head>
	<title>Resultado da busca</title>
</head>

<body>
	<nav>
		<img id="logo" src="img/logos/1.png" alt="Logo">
		<div class="search-container">
			<form action="busca.php" method="GET">
				<input type="text" name=nome_hamburguer placeholder="Pesquisar" class="search-box"><button id="mbl-sch"
					class="search-button"><span class="material-symbols-outlined">search</span></button></input>
				<button id="pc-sch" class="search-button"><span>Buscar</span></button>
			</form>
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
            <li><a href="index.php">Produtos</a></li>
            <li><a href="pedidos.php">Pedidos</a></li>
            <li><a href="prepagarcom.php">Em preparo</a></li>
            <li><a href="cadastro_produtos.php">Cadastro de Produtos</a></li>
        </ul>
    </div>
	<h2>Resultado da busca</h2>
	<div class="conteudo">
		<?php
		while ($resultados = $sth->fetch_assoc()) {
			if ($resultados['imagem_produto'] !== '') {
				?>
				<div class="fild"
					onclick="mostrarDetalhes('<?php echo $resultados['nome_produto'] ?>', '<?php echo $resultados['descricao_produto'] ?>', <?php echo $resultados['preco_produto'] ?>, '<?php echo $resultados['imagem_produto'] ?>')">
					<fieldset class="box">
						<?php echo '<img class="produto" src="' . $resultados['imagem_produto'] . '" alt="' . $resultados['nome_produto'] . '">
                <h3>' . $resultados['nome_produto'] . '</h3>
                <p>R$' . $resultados['preco_produto'] . '</p>';
			} else {
				echo "<div class='fild'>";
				echo "<p>'Produto não encontrado...'</p>";
			}
			?>
				</fieldset>
			</div>
		<?php } ?>
	</div>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-size: cover;
			margin: 0;
			padding: 0;
		}



		.fild {
			background-color: #efefef;
			box-shadow: 0px 1px 12px 3px #cecece;
			border-radius: 20px;
			padding: 10px;
			width: 200px;
			height: 250px;
			margin: 40px;


		}

		.conteudo {
			display: grid;
			grid-template-areas: "sidenav content";
			grid-template-columns: repeat(3, 1fr);
		}

		h2 {
			background-color: #F4E7E7;
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
</body>

</html>