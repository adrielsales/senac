<?php
require_once("../includes/admin-head_menu.php");
?>

<div class="container">

	<h1><i class="fa fa-plus-square" aria-hidden="true"></i> Cadastrar Imagem</h1>

	<?php  require_once("../includes/admin-head_menu.php"); ?>

		<form action="logica/imagem-salvar.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nome:</label>
				<input type="text" name="nome" class="form-control" required="required">
			</div>

			<div class="form-group">
				<label>Categorias:</label>
				<select name="categoria" class="form-control" required="required">
					<option value="" disabled="disabled" selected="selected">Escolha uma Opção</option>
					<option value="NAT">Natação</option>
					<option value="FUT">Futebol</option>
					<option value="VOL">Vôlei</option>
				</select>
			</div>

			<div class="form-group">
				<label>Detalhes:</label>
				<textarea name="detalhes" id="detalhes" class="form-control" required="required"></textarea>
			</div>

	        <script>
	        // Replace the <textarea id="meuId"> with a CKEditor
	        // instance, using default configuration.
	            CKEDITOR.replace( 'detalhes' );
	        </script>

			<div class="form-group">
				<label>Imagens:</label>
				<input type="file" name="imagem" required="required">
			</div>

			<div class="form-group">
				<input class="btn btn-primary btn-lg" type="submit" name="salvar" value="Salvar">
			</div>

		</form>
</div>

<?php require_once("../includes/admin-footer.php") ?>