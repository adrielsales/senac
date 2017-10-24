<?php
require_once("../banco/conexao.php");

$id = $_GET['id'];
$sql = "SELECT * FROM transportadoras WHERE id = {$id}";

$resultado = mysqli_query($conexao, $sql);
$categoria = mysqli_fetch_object($resultado);

require_once("../includes/header.php");
require_once("../includes/menu.php");

?>

  <div class="container">
    <h3>Editar Transportadora</h3>

		<form action="alterar-transportadora.php" method="post">

      <input type="hidden" name="id" value="<?php echo $categoria->id ?>">

      <div class="form-group">
        <label>Nome:</label>
        <input type="text" name="nome"
        class="form-control"
        value="<?php echo $categoria->nome ?>">
      </div>

      <div class="form-group">
        <input type="submit" name="enviar" value="Enviar">
      </div>
    </form>
  </div>

<?php require_once("../includes/footer.php"); ?>
