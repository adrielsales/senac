<?php
require_once("../banco/conexao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];

$sql = "UPDATE transportadoras SET nome='{$nome}' WHERE id = '{$id}'";

$resultado = mysqli_query($conexao, $sql);

if($resultado){
  header("Location:listar-transportadoras.php?sucesso=Alterado+com+Sucesso!");
  die();
}
