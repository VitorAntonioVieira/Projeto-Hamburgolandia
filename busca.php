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
<html>
<style>
		body {
			font-family: Arial, sans-serif;
			background-size: cover;
			margin: 0;
			padding: 0;
		}

		h2 {
			background-color: #e47f21; 
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
