<?php
require_once("../banco/imagens-banco.php");
require_once("../banco/conexao.php");

$mensagem = false;
$tipoDeMensagem = "warning";

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$categoria = mysqli_real_escape_string($conexao, $_POST['catagoria']);
$detalhes = mysqli_real_escape_string($conexao, $_POST['detalhes']);

//pegando o nome da imagem atual, caso precise alterar na pasta uploads.
$imagemAtual = mysqli_real_escape_string($conexao, $_POST['imagemAtual']);

//pegando o id do registro da imagem no banco de dados.
$id = $_POST['id'];
$ativa = $_POST['ativa'];

if (isset($_POST['atualizar'])) {
	
	/*Se existir alguma imagem no array FILES, usa a função alterarImagemJaCadastradaNoBanco para alterar e salvar os dados no banco de dados e na pasta. */
	if(empty($_FILES['novaImagem']['name'])){
		//alterarImagemJaCadastradaNoBanco($_FILES);
		$resultado = alteraImagem($conexao, $id, $nome, $detalhes, $categoria, $imagemAtual, $ativa);
		//Mensagens se conseguiu ou não inserir no Banco de Dados.
		if($resultado) {
			$mensagem = "Alteração realizada com sucesso!!";
			$tipoDeMensagem = "success";
		} else {
			$mensagem = "Problemas ao tentar realizar a atualização.";
			$tipoDeMensagem = "warning";
		}

		header("Location:../admin/index.php?mensagem={$mensagem}&tipoDeMensagem={$tipoDeMensagem}");
		die();
	} else {

	//Pegando a extensão para renomear o arquivo
	$extensao = @end(explode('.', $_FILES['novaImagem']['name']));
	$novoNome = time() * rand() .".".$extensao;

	//informar a pasta que as imagens serão salvas
	$folder = "../uploads/";

	//Deletando a imagem atual na  pasta upload e no banco de dados.
	unlink($folder.$imagemAtual);
	//enviar a nova imagem para o servidor
	$retorno = move_uploaded_file($_FILES['novaImagem']['tmp_name'], $folder.$novoNome);

	if ($retorno) {
		//Salvar os dados da nova imagem no Banco de Dados
		//$insersao = insereImagem($conexao, $nome, $detalhes, $categoria, $novoNome);
		$retorno = alteraImagem($conexao, $id, $nome, $detalhes, $categoria, $novoNome, $ativa);

		//Mensagens se conseguiu ou não inserir no Banco de Dados.
		if($retorno) {
			$mensagem = "Imagem e textos salvos com sucesso!!";
			$tipoDeMensagem = "success";
		} else {
			$mensagem = "Problemas ao tentar realizar a atualização da Imagem e dos textos";
			$tipoDeMensagem = "warning";
		}

	} else {
		$mensagem = "Problemas ao tentar realizar a atualização da Imagem e dos textos";
		$tipoDeMensagem = "warning";
	}

	header("Location:../admin/index.php?mensagem={$mensagem}&tipoDeMensagem={$tipoDeMensagem}");
	die();

	}//fim do else

}

