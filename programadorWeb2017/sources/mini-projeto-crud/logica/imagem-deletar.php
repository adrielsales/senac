<?php
require_once("../banco/imagens-banco.php");

$id = $_GET['id'];
var_dump($imagem = buscaImagem($conexao, $id));
$exclusao = excluiImagem($conexao, $id);

//Mensagens se conseguiu ou não excluir.
$mensagem = false;
$tipoDeMensagem = "warning";

//informar a pasta que as imagens estão.
$pasta = "../uploads/";

//echo $pasta.$imagem->url_imagem; exit();

if($exclusao && unlink($pasta.$imagem->url_imagem)) {
	$mensagem = "Imagem Excluída com sucesso!!";
	$tipoDeMensagem = "success";
} else {
	$mensagem = "Problemas ao tentar excluir a imagem";
	$tipoDeMensagem = "warning";
}

header("Location:../admin/imagem-listar.php?mensagem={$mensagem}&tipoDeMensagem={$tipoDeMensagem}");
die();