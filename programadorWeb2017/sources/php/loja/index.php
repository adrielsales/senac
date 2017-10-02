<?php

define("SERVIDOR", "localhost");
define("USUARIO", "root");
define("SENHA", "");
define("BANCO", "loja_programador_web_db");

$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO);

if (!$conexao) {
	echo "Erro ao tentar conectar: ";
	die();
} else {
	echo "Conectou beleza!";
}

#------------------------------------------------------------------------------

if (isset($_GET['salvar'])) {

	$nome = $_GET['nome'];
	$descricao = $_GET['descricao'];

	$sql = "insert into categorias (nome, descricao, estado) values ('{$nome}','{$descricao}',0)";
	$resultado = mysqli_query($conexao, $sql);

	var_dump($resultado);

}

/*Buscando dados no banco - tabela categorias*/
$listaDeCategorias = array();
$categoriasNoBanco = mysqli_query($conexao, "select * from categorias order by nome");
while ($categoria = mysqli_fetch_object($categoriasNoBanco)) {
	array_push($listaDeCategorias, $categoria);
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Loja Programador Web</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<h1>Loja Programador Web</h1>
		<hr>
		<h3 class="alert alert-info">Cadastrar categoria</h3>
		<form action="" method="get">
			<div class="form-group">
				<label for="nome">Nome</label>
				<input type="text" name="nome" class="form-control">
			</div>
			<div class="form-group">
				<label for="descricao">Descrição</label>
				<textarea name="descricao" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<input type="submit" name="salvar" class="btn btn-success btn-sm" value="Salvar">
			</div>
		</form>


		<h3 class="alert alert-info">Categorias cadastradas no sistema</h3>
		<table class="table">
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Descrição</th>
				<th>Estado</th>
				<th>Ações</th>
			</tr>
			<?php
			if ($listaDeCategorias) {
				foreach ($listaDeCategorias as $cat) {
					echo "<tr>";
					echo "<td>{$cat->id}</td>";
					echo "<td>{$cat->nome}</td>";
					echo "<td>{$cat->descricao}</td>";
					echo "<td>{$cat->estado}</td>";
					echo "<td>
									<a href='#'>Editar</a> |
									<a href='#'>Excluir</a>
								</td>";
					echo "</tr>";
				}
			}
			?>
		</table>


	</div>
</body>
</html>
