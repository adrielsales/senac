<?php 

require_once 'conexao.php';

$imagens = array();

$resultado = mysqli_query($conexao, "select * from imagens order by id desc");

if (!$resultado) {
	echo("Descrição do Erro: " . mysqli_error($conexao));
	die();
}

while ($imagem = mysqli_fetch_object($resultado)) {
	array_push($imagens, $imagem);
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Uploads com PHP</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Materialize CSS -->
	<link rel="stylesheet" type="text/css" href="resources/materialize/css/materialize.min.css">
</head>
<body>

	<div class="container">

		<?php if(isset($_GET['mensagem'])): ?>

			<div class="card red-grey darken-1">
				<div class="card-content green-text">
					<span class="card-title"><strong>Mensagem:</strong></span>
					<p><?php echo $_GET['mensagem']; ?>.</p>
				</div>
			</div>

		<?php endif; ?>


		<div class="card-panel blue lighten-2 white-text text-darken-2">
			<h4>Uploads com PHP</h4>
			<h5>Listando as imagens</h5>
			<ul>
				<li><a href="index.php" class="white-text">Home</a></li>
				<li><a href="listar-imagens.php" class="white-text">Lista de Imagens</a></li>
			</ul>
		</div>

		<table>
			<tr>
				<th>ID</th>
				<th>Descrição</th>
				<th>Imagem</th>
				<th>Ações</th>
			</tr>

			<?php foreach ($imagens as $imagem) : ?>

			<tr>
				<td><?php echo $imagem->id ?></td>
				<td><?php echo $imagem->descricao ?></td>
				<td>
					<img src="uploads/<?php echo $imagem->nome ?>" alt="<?php echo $imagem->descricao ?>" width="50">
				</td>
				<td>
					<a href="editar-imagem.php?id=<?=$imagem->id?>" class="btn blue">Editar</a>
					<a href="deletar-imagem.php?id=<?=$imagem->id?>" class="btn red">Excluir</a>
				</td>
			</tr>

		<?php endforeach; ?>

		</table>
	</div>


	<!-- Materialize JQuery -->
	<script type="text/javascript" src="resources/js/jquery-3.2.1.min.js"></script>
	<!-- Materialize JS -->
	<script type="text/javascript" src="resources/materialize/js/materialize.min.js"></script>
</body>
</html>