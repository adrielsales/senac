<?php
require_once("../banco/conexao.php");

$id = $_GET['id'];
$sql = "SELECT * FROM categorias WHERE id = {$id}";

$resultado = mysqli_query($conexao, $sql);
$categoria = mysqli_fetch_object($resultado);

require_once("../includes/header.php");
require_once("../includes/menu.php");

?>

  <div class="container">
    <h3>Editar Categoria</h3>

		<form action="alterar-categoria.php" method="post">

      <input type="hidden" name="id" value="<?php echo $categoria->id ?>">

      <div class="form-group">
        <label>Nome:</label>
        <input type="text" name="nome"
        class="form-control"
        value="<?php echo $categoria->nome ?>">
      </div>

      <div class="form-group">
        <label>Descrição</label>
        <textarea
        class="form-control"
        name="descricao"><?php echo $categoria->descricao ?></textarea>
      </div>

      <div class="form-group">
        <label>Estado</label>
        <select class="form-control" name="estado">
          <?php if ($categoria->estado == 1): ?>
            <option value="0">Desativado</option>
            <option value="1" selected="">Ativado</option>
          <?php else : ?>
            <option value="0" selected="">Desativado</option>
            <option value="1">Ativado</option>
          <?php endif; ?>
        </select>
      </div>

      <div class="form-group">
        <input type="submit" name="enviar" value="Enviar">
      </div>
    </form>
  </div>

<?php require_once("../includes/header.php"); ?>
