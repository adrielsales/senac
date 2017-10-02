<?php
require_once("../banco/imagens-banco.php");

$mensagem = false;
$tipoDeMensagem = "warning";

if (isset($_POST['salvar'])) {

	//$nome = $_POST['nome'];
	//$categoria = $_POST['catagoria'];
	//$detalhes = $_POST['detalhes'];

	//Tratando as imagens contra SQL Injetion, por isso usamos esta função.
	$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
	$categoria = mysqli_real_escape_string($conexao, $_POST['categoria']);
	$detalhes = mysqli_real_escape_string($conexao, $_POST['detalhes']);

	//Pegando a extensão para renomear o arquivo
	$extensao = @end(explode('.', $_FILES['imagem']['name']));
	$novoNome = time() * rand() .".".$extensao;

	//informar a pasta que as imagens serão salvas
	$folder = "../uploads/";

	//enviar a imagem para o servidor
	$retorno = move_uploaded_file($_FILES['imagem']['tmp_name'], $folder.$novoNome);

	if ($retorno) {
		//Salvar os dados da imagem no Banco de Dados
		$insersao = insereImagem($conexao, $nome, $detalhes, $categoria, $novoNome);

		//Mensagens se conseguiu ou não inserir no Banco de Dados.
		if($insersao) {
			$mensagem = "Imagem salva com sucesso!!";
			$tipoDeMensagem = "success";
		} else {
			$mensagem = "Problemas ao tentar realizar o upload da imagem";
			$tipoDeMensagem = "warning";
		}

	} else {
		$mensagem = "Problemas ao tentar realizar o upload da imagem";
		$tipoDeMensagem = "warning";
	}

	header("Location:../admin/index.php?mensagem={$mensagem}&tipoDeMensagem={$tipoDeMensagem}");
	die();

}