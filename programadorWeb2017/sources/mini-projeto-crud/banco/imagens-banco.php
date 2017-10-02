<?php
require_once("conexao.php");

function insereImagem($conexao, $nome, $detalhes, $categoria, $url_imagem){
	$sql = "insert into imagens (nome, detalhes, categoria, url_imagem) values ('{$nome}','{$detalhes}','{$categoria}','{$url_imagem}')";
	$resultado = mysqli_query($conexao, $sql);
	return $resultado;
}

function listaImagens($conexao){

	$imagens = array();
	$resultado = mysqli_query($conexao, "select * from imagens order by id desc");
	while ($imagem = mysqli_fetch_object($resultado)) {
		array_push($imagens, $imagem);
	}
	return $imagens;
}

function buscaImagem($conexao, $id)
{
	$sql = "select * from imagens where id = {$id}";
	$resultado = mysqli_query($conexao, $sql);
	$imagem = mysqli_fetch_object($resultado);
	return $imagem;
}

function excluiImagem($conexao, $id)
{
	$sql = "delete from imagens where id = {$id}";
	$resultado = mysqli_query($conexao, $sql);
	return $resultado;
}

function alteraImagem($conexao, $id, $nome, $detalhes, $categoria, $url_imagem, $ativa)
{
	$query = "update imagens set nome='{$nome}', detalhes='{$detalhes}', categoria='{$categoria}', url_imagem='{$url_imagem}', ativa={$ativa} where id = {$id}";
	if(mysqli_query($conexao, $query)) {
		return true;
	} else {
		 echo("Error description: " . mysqli_error($conexao));
		 die();
	}
}
