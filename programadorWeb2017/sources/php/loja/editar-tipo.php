<?php
require_once 'conexao.php';

$id = $_GET['tipo_id'];
$sql = "SELECT * FROM tipos WHERE id = {$id}";

$resultado = mysqli_query($conexao, $sql);
$tipo = mysqli_fetch_object($resultado);
//var_dump($tipo);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Editar Tipo</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <a href="index.php">
      <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
      Home
    </a>
    <h3>Editar Tipo</h3>
    <form action="alterar-tipo.php" method="get">

      <input type="hidden" name="id" value="<?php echo $tipo->id ?>">

      <div class="form-group">
        <label>Nome:</label>
        <input type="text" name="nome"
        class="form-control"
        value="<?php echo $tipo->nome ?>">
      </div>

      <div class="form-group">
        <label>Descrição</label>
        <textarea
        class="form-control"
        name="descricao"><?php echo $tipo->descricao ?></textarea>
      </div>

      <div class="form-group">
        <label>Estado</label>
        <select class="form-control" name="estado">
          <?php if ($tipo->estado == 1): ?>
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
</body>
</html>
