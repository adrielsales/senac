<?php 

/*

Verificar tamanho do upload no php.ini
; Maximum allowed size for uploaded files.
; http://php.net/upload-max-filesize
upload_max_filesize = 64M

erros:
http://php.net/manual/pt_BR/features.file-upload.errors.php

*/


if(isset($_POST['salvar'])){

	//Informações das Imagens
	$file = $_FILES['imagens'];
	$numeroDeImagens = count(array_filter($file['name']));

	//Pasta para salvar
	$folder = "uploads";

	//Requisitos e Permissões
	$extensoesPermitidas = array('image/jpeg', 'image/png');
	$tamanhoMaximo = 1024 * 1024 * 5;

	//Mensagens e Erros
	$mensagem = array();
	$errosNoUpload = array(
		1 => 'O arquivo enviado excede o limite definido na diretiva upload_max_filesize do php.ini.',
		2 => 'O arquivo excede o limite definido em MAX_FILE_SIZE no formulário HTML.',
		3 => 'O upload do arquivo foi feito parcialmente.',
		4 => 'Nenhum arquivo foi enviado.'
		);

	if ($numeroDeImagens <= 0) {
		$mensagem[] = "Selecione uma Imagem";
	} else {
		for($i = 0; $i < $numeroDeImagens; $i++){

			//Trabalahando com as imagem para salvar
			$name = $file['name'][$i];
			$type = $file['type'][$i];
			$size = $file['size'][$i];
			$error = $file['error'][$i];
			$tmp = $file['tmp_name'][$i];

			//Pegando a extensão
			$extensão = @end(explode('.', $name));
			$novoNome = time() * rand() .".$extensão";

			if ($error != 0) {
				$mensagem[] = "<strong>{$name} :</strong>" . $errosNoUpload[$error];
			} else if (!in_array($type, $extensoesPermitidas)){
				$mensagem[] = "<strong>{$name} :</strong> Tipo não suportado.";
			} else if ($size > $tamanhoMaximo) {
				$mensagem[] = "<strong>{$name} :</strong> Aruivo muito grande.";
			} else {
				if(move_uploaded_file($tmp, $folder."/".$novoNome)){
					$mensagem[] = "<strong>{$name} :</strong> Upload realizado com Sucesso!!.";
				} else {
					$mensagem[] = "<strong>{$name} :</strong> Problemas com o upload.";
				}
			}

		}
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Múltiplas Imagens</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>


	<div class="container">

	<h1>Cadastrar Múltiplas Imagens<</h1>

		<?php if(isset($mensagem)) : ?>
			<div class="alert alert-warning alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <?php foreach ($mensagem as $msn) {
			  	echo $msn . "<br>";
			  }  ?>
			</div>
		<?php endif ?>

		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nome:</label>
				<input type="text" name="nome" class="form-control">
			</div>

			
			<div class="form-group">
				<label>Categorias:</label>
				<select name="catagoria" class="form-control">
					<option value="" disabled="disabled" selected="selected">Escolha uma Opção</option>
					<option value="NAT">Natação</option>
					<option value="FUT">Futebol</option>
					<option value="VOL">Vôlei</option>
				</select>
			</div>

			<div class="form-group">
				<label>Detalhes:</label>
				<textarea name="detalhes" class="form-control"></textarea>
			</div>

			<div class="form-group">
				<label>Imagens:</label>
				<input type="file" name="imagens[]" multiple>
			</div>

			<div class="form-group">
				<input class="btn btn-primary" type="submit" name="salvar" value="Salvar">
			</div>

		</form>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>