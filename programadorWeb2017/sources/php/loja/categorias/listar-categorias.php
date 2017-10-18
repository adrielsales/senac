<?php
	require_once("../banco/conexao.php");

	//busca linhas da tabela tipos
	$sql = "SELECT * FROM categorias ORDER BY nome";
	$resultado = mysqli_query($conexao, $sql);

	require_once("../includes/header-pages.php");
?>


	<div class="container">
		<div class="row">
			<h3>Listar Categorias no Sistema</h3>
			<hr>

			<?php if(isset($_GET['sucesso'])): ?>
				<div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close"
					data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<?php echo $_GET['sucesso']; ?>
				</div>
			<?php endif; ?>

			<a href="form-categoria.php" class="btn btn-success botao-new">+ Adicionar uma nova Categoria</a>
		</div> <!-- end row -->
	</div> <!-- end header -->

	<section class="container">
		<div class="row">

			<table class="table table-striped table-hover">
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Descrição</th>
					<th>Estado</th>
					<th>Ações</th>
				</tr>

				<?php
				// começo do loop while
				while ($categoria = mysqli_fetch_object($resultado)) { ?>
					<tr>
						<td><?php echo $categoria->id ?></td>
						<td><?php echo $categoria->nome ?></td>
						<td><?php echo $categoria->descricao ?></td>
						<td>
							<?php
								echo ($categoria->estado == 1)
								? "<i class='fa fa-check-circle' aria-hidden='true'></i>"
								: "<i class='fa fa-times-circle' aria-hidden='true'></i>";
							?>
						</td>
						<td>
							<div class="btn-group">
								<a href='editar-categoria.php?id=<?php echo $categoria->id ?>'
									class='btn btn-default btn-xs'>
									Editar
								</a>
								<a href='#'
										class='btn btn-warning btn-xs'
										data-toggle="modal" data-target="#<?php echo $categoria->id ?>">
										Excluir
								</a>
							</div>

							<!-- Modal -->
							<div class="modal fade" id="<?php echo $categoria->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title text-danger" id="myModalLabel">Excluir Registro</h4>
							      </div>
							      <div class="modal-body">
							        Tem certeza que deseja excluir o registro
											<strong><?php echo $categoria->nome ?> </strong>
											permanentemente do Banco de Dados? <br>
											<strong class="text-danger">Observação: Essa ação não poderá ser revertida.</strong>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
											<a href='excluir-categoria.php?id=<?php echo $categoria->id ?>'
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
