<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Formulário de Login</title>
	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Materialize CSS -->
	<link rel="stylesheet" type="text/css" href="resources/materialize/css/materialize.min.css">
</head>
<body>
	<div class="container">
		<div class="card-panel green">
			Sistema de Login
		</div>

		<?php if(isset($_GET['erro_autenticacao'])): ?>

		<div class="card red-grey darken-1">
	        <div class="card-content red-text">
	          <span class="card-title"><strong>Erro ao tentar login</strong></span>
	          <p>Email ou Senha não conferem. Por favor, tente novamente.</p>
	        </div>
	    </div>


		<?php endif; ?>

		<div class="row">
		    <form class="col s12" action="valida.php" method="post">
		      <div class="row">
		        <div class="input-field col s12">
		          <i class="material-icons prefix">email</i>
		          <input id="icon_prefix" name="email" type="text" class="validate">
		          <label for="icon_prefix">Email</label>
		        </div>
		        <div class="input-field col s12">
		          <i class="material-icons prefix">lock</i>
		          <input id="icon_telephone" name="senha" type="password" class="validate">
		          <label for="icon_telephone">Senha</label>
		        </div>
		        <div class="input-field col s12">
		          <button class="waves-effect waves-light btn" type="submit" name="login" value="login">
		          	<i class="material-icons left">send</i>Enviar
		          </button>
		        </div>
		      </div>
		    </form>
		  </div>

	</div>

	<!-- Materialize JQuery -->
	<script type="text/javascript" src="resources/js/jquery-3.2.1.min.js"></script>
	<!-- Materialize JS -->
	<script type="text/javascript" src="resources/materialize/js/materialize.min.js"></script>
</body>
</html>