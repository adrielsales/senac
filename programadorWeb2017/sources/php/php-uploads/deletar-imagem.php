<?php
require_once 'conexao.php';

$id = (int) $_GET['id'];

$sql = "DELETE FROM imagens WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);

if($resultado){
  header("Location:listar-imagens.php?mensagem=Excluído+com+Sucesso!");
  d1ie();
}