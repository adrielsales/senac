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
			<ul>
				<li><a href="index.php" class="white-text">Home</a></li>
				<li><a href="listar-imagens.php" class="white-text">Lista de Imagens</a></li>
			</ul>
		</div>

		<form action="salva-imagem.php" method="post" enctype="multipart/form-data">

			<legend><h4>Imagens</h4></legend>

			<div class="input-field col s12">
				<i class="material-icons prefix">assignment</i>
				<input id="icon_prefix" name="descricao" type="text" class="validate">
				<label for="icon_prefix">Descrição da imagem</label>
			</div>

			<div class="file-field input-field">
				<div class="btn">
					<span>Escolha uma imagem:</span>
					<input type="file" name="imagem">
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text">
				</div>
			</div>

			<div class="input-field col s12">
				<button class="waves-effect waves-light btn" type="submit" name="enviar" value="enviar">
					<i class="material-icons left">send</i>Enviar
				</button>
			</div>

		</form>

	</div>

	<!-- Materialize JQuery -->
	<script type="text/javascript" src="resources/js/jquery-3.2.1.min.js"></script>
	<!-- Materialize JS -->
	<script type="text/javascript" src="resources/materialize/js/materialize.min.js"></script>
</body>
</html>