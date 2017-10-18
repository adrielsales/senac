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
      <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
      Home
    </a>
    <h3>Cadastro de Tipos</h3>

    <form action="create-tipo.php" method="get">

    
      <div class="form-group">
        <label>Nome:</label>
        <input type="text" name="nome" class="form-control">
      </div>
      <div class="form-group">
        <label>Descrição</label>
        <textarea class="form-control" name="descricao"></textarea>
      </div>
      <div class="form-group">
        <label>Estado</label>
        <select class="form-control" name="estado">
          <option value="0">Desativado</option>
          <option value="1">Ativado</option>
        </select>
      </div>
      <div class="form-group">
        <input type="submit" name="enviar" value="Enviar">
      </div>
    </form>
  </div>
</body>
</html>
