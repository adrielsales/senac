<?php
session_start();

if (!isset($_SESSION["nome_usuario"])) {
	header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Home do Sistema</title>
	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Materialize CSS -->
	<link rel="stylesheet" type="text/css" href="resources/materialize/css/materialize.min.css">
</head>
<body>
	<div class="container">
		<h1>Home do Sistema</h1>
		<h3>Bem vindo <?php echo $_SESSION['nome_usuario'] ?></h3>
		<a href="logout.php" class="waves-effect waves-light btn">Deslogar</a>
	</div>

	<!-- Materialize JQuery -->
	<script type="text/javascript" src="resources/js/jquery-3.2.1.min.js"></script>
	<!-- Materialize JS -->
	<script type="text/javascript" src="resources/materialize/js/materialize.min.js"></script>
</body>
</html>