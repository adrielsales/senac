<?php
require_once("../banco/conexao.php");
$id = $_GET['id'];
$sql = "DELETE FROM transportadoras WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);
if($resultado){
  header("Location:listar-transportadoras.php?sucesso=Excluído+com+Sucesso!");
  die();
}
