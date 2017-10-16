<?php
	require_once("../banco/conexao.php");

if (isset($_POST['enviar'])) {
  $nome = $_POST['nome'];

  $sql = "INSERT INTO transportadoras (nome)
  VALUES ('{$nome}');";

  $resultado = mysqli_query($conexao, $sql);

  if ($resultado) {
  	header("Location:listar-transportadoras.php?sucesso=Adicionado+com+sucesso!");
  }

}

?>
