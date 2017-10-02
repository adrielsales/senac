<div class="container">
	<?php 
	if(isset($_GET['mensagem']) && $_GET['mensagem'] != false) : 
		$mensagem = $_GET['mensagem'];
		$tipoDeMensagem = $_GET['tipoDeMensagem'];
	?>
		<div class="alert alert-<?=$tipoDeMensagem?> alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <?= $mensagem ?>
		</div>
	<?php endif ?>
</div>