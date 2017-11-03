<?php 

require_once 'conexao.php';

$mensagem = false;
$tipoDeMensagem = "warning";

// echo $_FILES['imagem']['name'];
// echo "<br>";
// echo $_FILES['imagem']['type'];
// echo "<br>";
// echo $_FILES['imagem']['tmp_name'];
// echo "<br>";
// echo $_FILES['imagem']['error'];
// echo "<br>";
// echo $_FILES['imagem']['size'];


function insereImagem($conexao, $descricao, $nome){

	$sql = "INSERT INTO imagens (descricao, nome) VALUES ('{$descricao}', '{$nome}')";

	$resultado = mysqli_query($conexao, $sql);

	if ($resultado) {
		return true;
	} else {
		echo("Descrição do Erro: " . mysqli_error($conexao));
		die();
	}
}


if (isset($_POST['enviar']) && isset($_FILES)) {

	//Tratando as strings contra SQL Injetion.
	$descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);

	//Pegando a extensão para renomear o arquivo
	$extensao = @end(explode('.', $_FILES['imagem']['name']));
	$novoNome = time() * rand() .".".$extensao;


	//informar a pasta que as imagens serão salvas
	$folder = "uploads/";

	//enviar a imagem para o servidor
	$retorno = move_uploaded_file($_FILES['imagem']['tmp_name'], $folder.$novoNome);


	if ($retorno != false) {
		//Salvar os dados da imagem no Banco de Dados
		$insersao = insereImagem($conexao, $descricao, $novoNome);

		//Feedback para o usuário, se conseguiu ou não inserir no Banco de Dados.
		if($insersao) {
			$mensagem = "Imagem salva com sucesso!!";
		} else {
			$mensagem = "Problemas ao tentar realizar o upload da imagem";
		}

	} else {
		$mensagem = "Problemas ao tentar realizar o upload da imagem";
	}

	header("Location:index.php?mensagem={$mensagem}");
	die();

}

?>