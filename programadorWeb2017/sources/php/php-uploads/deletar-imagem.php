<?php
require_once 'conexao.php';

$id = (int) $_GET['id'];

$sql = "SELECT * FROM imagens WHERE id = $id LIMIT 1";
$resultado = mysqli_query($conexao, $sql);
$imagem = mysqli_fetch_object($resultado);

$sql = "DELETE FROM imagens WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);

if($resultado){
	unlink("uploads/".$imagem->nome);
  	header("Location:listar-imagens.php?mensagem=Excluído+com+Sucesso!");
  	die();
}