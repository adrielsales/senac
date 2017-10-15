<?php
define("SERVIDOR", "localhost");
define("USUARIO", "root");
define("SENHA", "");
define("BANCO", "loja_programador_web_db");

$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO);
if (!$conexao) {
  echo "Erro ao tentar conectar: ";
  die();
}

//busca linhas da tabela tipos
$sql = "SELECT * FROM categorias ORDER BY nome";
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
          echo "<td>Editar | Excluir</td>";
          echo "</tr>";
        }
       ?>

    </table>

  </div>
</body>
</html>
