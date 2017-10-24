<?php
	require_once("../banco/conexao.php");

if (isset($_POST['enviar'])) {
  $nome = $_POST['nome'];
  $descricao = $_POST['descricao'];
  $estado = $_POST['estado'];

  $sql = "INSERT INTO marcas (nome, descricao, estado)
  VALUES ('{$nome}','{$descricao}','{$estado}');";

  $resultado = mysqli_query($conexao, $sql);

  if ($resultado) {
  	header("Location:listar-marcas.php?sucesso=Adicionado+com+sucesso!");
  }

}

?>
