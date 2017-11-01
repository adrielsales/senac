<?php

require_once 'conexao.php';

$usuarioExiste = false;

// Checar se os dados do formulário foram enviados.
if (isset($_POST["login"])) {


	// capturar as variáveis que vem do formulário.
	$email = mysqli_real_escape_string($conexao, $_POST['email']);
	$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
	$senhaCriptografada = sha1($senha);

	// Buscar os usuarios já cadastrados no Banco de Dados.
	$sql = "SELECT * FROM usuarios";
	$usuarios = mysqli_query($conexao, $sql);


	// faz o loop para percorrer o conjunto de usuários no banco.
	while ($usuario = mysqli_fetch_object($usuarios)) {

		//Com base nos dados do BD, verifica se o usuário está cadastrado.
		if ($email === $usuario->email && $senhaCriptografada == $usuario->senha) {

			echo $email;
			echo "<br>".  $usuario->email;
			echo "<br>".  $senhaCriptografada;
			echo "<br>".  $usuario->senha;

			//Se o usuário estiver cadastrado no BD, cria uma sessão e autentica.
			session_start();
			if (!(isset($_SESSION['nome_usuario']))) {
				echo "foi";
				$_SESSION["nome_usuario"] = $usuario->nome;
				$_SESSION["email_usuario"] = $usuario->email;
				$_SESSION["nivel_usuario"] = $usuario->senha;
				$usuarioExiste = true;
				break;
			}
		}
	}

}

if($usuarioExiste == true){
	//Redireciona para a página principal.
	header("Location:home-sistema.php");
} else {
	// se fez o loop e não encontrou nenhum usuário com as mesmas credenciais,
	// redireciona para o formulário de login, na index.php
	header("Location:index.php?erro_autenticacao=true");
}