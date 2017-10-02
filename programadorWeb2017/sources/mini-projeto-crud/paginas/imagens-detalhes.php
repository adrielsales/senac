<?php
require_once("../banco/imagens-banco.php");

$id = $_GET['id'];
$imagem = buscaImagem($conexao, $id);
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<h1>Detalhes da Imagem</h1>

<figure>
	<img class="img-categorias" alt="<?= $imagem->nome ?>" src="../uploads/<?= $imagem->url_imagem ?>" />
		<figcaption>
			<h3><?= $imagem->nome ?></h3>
			<p><?= $imagem->detalhes ?></p>
		</figcaption>
</figure>

</body>
</html>