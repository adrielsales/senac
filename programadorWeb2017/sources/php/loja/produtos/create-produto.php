<?php
	require_once("../banco/conexao.php");

if (isset($_POST['enviar'])) {

	var_dump($_POST); die;

	$nome = $_POST['nome'];
	$data_validade = $_POST['data_validade'];
	$data_cadastro = $_POST['data_cadastro'];
	$quantidade = $_POST['quantidade'];
	$valor = $_POST['valor'];
	$descricao = $_POST['descricao'];
	$estado = $_POST['estado'];
	$imagem = $_POST['imagem'];
	$marca_id = $_POST['marca_id'];
	$categoria_id = $_POST['categoria_id'];

  $sql = "INSERT INTO categorias (
											nome,
											data_validade,
											data_cadastro,
											quantidade,
											valor,
											imagem,
											marca_id,
											categoria_id,
											descricao)
  						VALUES ('{$nome}',
											'{$data_validade}',
											now(),
											'{$quantidade}',
											'{$valor}',
											'{$imagem}',
											'{$marca_id}',
											'{$categoria_id}',
											'{$descricao}')
	";

  $resultado = mysqli_query($conexao, $sql);

  if ($resultado) {
  	header("Location:listar-produtos.php?sucesso=Adicionado+com+sucesso!");
  }

}

?>
