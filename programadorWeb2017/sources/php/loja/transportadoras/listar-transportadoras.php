<?php
	require_once("../banco/conexao.php");

	//busca linhas da tabela tipos
	$sql = "SELECT * FROM transportadoras ORDER BY nome";
	$resultado = mysqli_query($conexao, $sql);

	require_once("../includes/header-pages.php");
?>


	<div class="container">
		<div class="row">
			<h3>Listar Transportadoras no Sistema</h3>
			<hr>

			<?php if(isset($_GET['sucesso'])): ?>
				<div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close"
					data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<?php echo $_GET['sucesso']; ?>
				</div>
			<?php endif; ?>

			<a href="form-transportadora.php" class="btn btn-success botao-new">+ Adicionar uma nova Transportadoras</a>
		</div> <!-- end row -->
	</div> <!-- end header -->

	<section class="container">
		<div class="row">

			<table class="table table-striped table-hover">
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th class="text-right">Ações</th>
				</tr>

				<?php
				// começo do loop while
				while ($transportadora = mysqli_fetch_object($resultado)) { ?>
					<tr>
						<td><?php echo $transportadora->id ?></td>
						<td><?php echo $transportadora->nome ?></td>
						<td>
							<div class="btn-group pull-right">
								<a href='editar-transportadora.php?id=<?php echo $transportadora->id ?>'
									class='btn btn-default btn-xs'>
									Editar
								</a>
								<a href='#'
										class='btn btn-warning btn-xs'
										data-toggle="modal" data-target="#<?php echo $transportadora->id ?>">
										Excluir
								</a>
							</div>

							<!-- Modal -->
							<div class="modal fade" id="<?php echo $transportadora->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title text-danger" id="myModalLabel">Excluir Registro</h4>
										</div>
										<div class="modal-body">
											Tem certeza que deseja excluir o registro
											<strong><?php echo $transportadora->nome ?> </strong>
											permanentemente do Banco de Dados? <br>
											<strong class="text-danger">Observação: Essa ação não poderá ser revertida.</strong>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
											<a href='excluir-transportadora.php?id=<?php echo $transportadora->id ?>'
												class="btn btn-danger" id="confirm" >Excluir
											</a>
										</div>
									</div>
								</div>
							</div>

						</td>
					</tr>
				<?php } // fim do loop while ?>
				</table>
			</div>  <!-- end row -->
		</section> <!-- end section -->

<?php require_once("../includes/footer-pages.php"); ?>
