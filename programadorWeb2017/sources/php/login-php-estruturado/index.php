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

		<div class="row">
		    <form class="col s12">
		      <div class="row">
		        <div class="input-field col s6">
		          <i class="material-icons prefix">account_circle</i>
		          <input id="icon_prefix" type="text" class="validate">
		          <label for="icon_prefix">Email</label>
		        </div>
		        <div class="input-field col s6">
		          <i class="material-icons prefix">phone</i>
		          <input id="icon_telephone" type="tel" class="validate">
		          <label for="icon_telephone">Senha</label>
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