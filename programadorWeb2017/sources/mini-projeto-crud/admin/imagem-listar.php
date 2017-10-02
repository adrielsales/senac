<?php
require_once("../includes/admin-head_menu.php");
require_once("../banco/imagens-banco.php");

$imagens = listaImagens($conexao);

function mostarCategorias($codCategoria){
	switch ($codCategoria) {
		case 'NAT':
			return "Natação";

		case 'FUT':
			return "Futebol";

		case 'VOL':
			return "Vôleibol";
	}
}

function estadoAtual($estado){
	if($estado == 1){
		return "<i class='fa fa-check-circle text-success' aria-hidden='true'></i>";
	} else {
		return "<i class='fa fa-times-circle text-danger' aria-hidden='true'></i>";
	}
}

?>

<div class="container">

	<h1><i class="fa fa-list-alt" aria-hidden="true"></i> Listar Imagens</h1>

	<table class="table table-hover">
		<tr>
			<th>Imagem</th>
			<th>ID</th>
			<th>Nome</th>
			<th>Categoria</th>
			<th>Ativa</th>
			<th colspan="3">Ações</th>
		</tr>
		
		<?php foreach($imagens as $imagem) : ?>
		<tr>
			<td>
				<a href="#" class="thumbnail img-tabela-imagem-listar">
				<img src="uploads/<?= $imagem->url_imagem ?>" alt="<?= $imagem->nome ?>">
				</a>
			</td>
			<td><?= $imagem->id ?></td>
			<td><?= $imagem->nome ?></td>
			<td><?= mostarCategorias($imagem->categoria) ?></td>
			<td><?= estadoAtual($imagem->ativa) ?></td>
			<td><a href="admin/imagem-detalhes-admin.php?id=<?=$imagem->id?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-th-list"></span> Detalhes</a></td>
			<td><a href="admin/imagem-editar.php?id=<?=$imagem->id?>" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span> Editar</a></td>
			<td><a href="logica/imagem-deletar.php?id=<?=$imagem->id?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span> Excluir</a></td>
		</tr>
	<?php endforeach; ?>
	</table>

</div>

<?php require_once("../includes/admin-footer.php") ?>