<?php
require_once 'conexao.php';
$id = $_GET['tipo_id'];
$sql = "DELETE FROM tipos WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);
if($resultado){
  header("Location:listar-tipos.php?sucesso=Excluído+com+Sucesso!");
  die();
}
