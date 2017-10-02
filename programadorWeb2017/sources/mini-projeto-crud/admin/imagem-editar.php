<?php
require_once("../includes/admin-head_menu.php");
require_once("../banco/imagens-banco.php");

$id = $_GET['id'];
$imagem = buscaImagem($conexao, $id);
?>

<div class="container">

	<h1><i class="fa fa-pencil" aria-hidden="true"></i> Editar Imagem</h1>

	<?php  require_once("../includes/admin-head_menu.php"); ?>

		<form action="logica/imagem-alterar.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nome:</label>
				<input type="text" name="nome" class="form-control" required="required" value="<?= $imagem->nome; ?>">
			</div>

			<div class="form-group">
				<label>Categorias:</label>
				<select name="catagoria" class="form-control" required="required">
					<option value="" disabled="disabled">Escolha uma Opção</option>
					<option value="NAT" 
					<?php if($imagem->categoria == "NAT") : ?> selected="selected" <?php endif?>
					>
					Natação</option>

					<option value="FUT"
					<?php if($imagem->categoria == "FUT") : ?> selected="selected" <?php endif?>
					>
					Futebol</option>

					<option value="VOL"
					<?php if($imagem->categoria == "VOL") : ?> selected="selected" <?php endif?>
					>
					Vôlei</option>
				</select>
			</div>

			<div class="form-group">
				<label>Ativo</label>
				<select class="form-control" name="ativa">
					<option value="1"
					<?php if($imagem->ativa == 1) : ?> selected="selected" <?php endif?>
					>
					Ativo</option>
					
					<option value="0"
					<?php if($imagem->ativa == 0) : ?> selected="selected" <?php endif?>
					>
					Inativo</option>
				</select>
			</div>

			<div class="form-group">
				<label>Detalhes:</label>
				<textarea name="detalhes" id="detalhes" class="form-control" required="required"><?= $imagem->detalhes; ?></textarea>
			</div>

	        <script>
	        // Replace the <textarea id="meuId"> with a CKEditor
	        // instance, using default configuration.
	            CKEDITOR.replace( 'detalhes' );
	        </script>

			<div class="form-group">
				<label>Imagem Atual:</label>
				<img src="uploads/<?= $imagem->url_imagem ?>" alt="<?= $imagem->nome ?>" class="thumbnail img-tabela-imagem-listar">
				
				<input type="hidden" name="imagemAtual" value="<?= $imagem->url_imagem ?>">
				<input type="hidden" name="id" value="<?= $imagem->id ?>">

				<label>Para alterar a imagem, escolha um outro arquivo:</label>
				<input type="file" name="novaImagem">
			</div>

			<div class="form-group">
				<input class="btn btn-primary btn-lg" type="submit" name="atualizar" value="Atualizar">
			</div>

		</form>
</div>

<?php require_once("../includes/admin-footer.php") ?>