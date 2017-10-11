<?php
require_once 'conexao.php';

if (isset($_GET['enviar'])) {
  $nome = $_GET['nome'];
  $descricao = $_GET['descricao'];
  $estado = $_GET['estado'];

  $sql = "INSERT INTO tipos (nome, descricao, estado)
  VALUES ('{$nome}','{$descricao}','{$estado}');";

  $resultado = mysqli_query($conexao, $sql);

  if ($resultado) {
  	header("Location:listar-tipos.php");
  }

}

?>