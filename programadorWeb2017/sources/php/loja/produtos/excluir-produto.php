<?php
require_once("../banco/conexao.php");
$id = $_GET['id'];
$sql = "DELETE FROM produtos WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);
if($resultado){
  header("Location:listar-produtos.php?sucesso=Excluído+com+Sucesso!");
  die();
}
