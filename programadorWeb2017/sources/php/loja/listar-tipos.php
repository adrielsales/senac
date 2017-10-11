<?php
require_once 'conexao.php';

//busca linhas da tabela tipos
$sql = "SELECT * FROM tipos ORDER BY nome";
$resultado = mysqli_query($conexao, $sql);

?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exemplo 01</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <a href="index.php">
      <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home
    </a>
    <h3>Listar Tipos no Sistema</h3>
    <hr>

    <?php if(isset($_GET['sucesso'])): ?>
      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close"
        data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        <?php echo $_GET['sucesso']; ?>
      </div>
    <?php endif; ?>

    <table class="table table-striped">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Estado</th>
        <th>Ações</th>
      </tr>

      <?php
      while ($linha = mysqli_fetch_object($resultado)) {
        echo "<tr>";
        echo "<td>{$linha->id}</td>";
        echo "<td>{$linha->nome}</td>";
        echo "<td>{$linha->descricao}</td>";
        echo "<td>{$linha->estado}</td>";
        echo "<td>
        <a href='editar-tipo.php?tipo_id={$linha->id}' class='btn btn-info btn-xs'>Editar</a>
        |
        <a href='excluir-tipo.php?tipo_id={$linha->id}' class='btn btn-danger btn-xs'>Excluir</a>
        </td>";
        echo "</tr>";
      }
      ?>

    </table>

  </div>


  <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
