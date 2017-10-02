<?php 

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Área Administrativa do Site</title>
	<base href="http://localhost/senac/mini-projeto-crud/">
	<link rel="stylesheet" type="text/css" href="publico/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="publico/css/admin.css">

	<!-- glyphicons -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Editor -->
	<script src="ckeditor/ckeditor.js"></script>
</head>
<body>

	<header class="container">
		<h1><i class="fa fa-unlock-alt" aria-hidden="true"></i> Área Administrativa do Site</h1>
	</header>

	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="admin/">FotosSports</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="admin/imagem-formulario.php">Cadastrar Imagem <span class="sr-only">(current)</span></a></li>
						<li><a href="admin/imagem-listar.php">Listar Imagens</a></li>
						<li><a href="http://localhost/senac/mini-projeto-crud/" target="_blank">Ir para o site</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> Minha Conta<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</div><!-- fim do container do menu -->

<?php require_once("mensagens.php"); ?>