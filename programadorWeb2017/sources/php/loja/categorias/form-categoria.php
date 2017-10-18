<?php require_once("../includes/header-pages.php"); ?>

  <div class="container">
    <h3>Cadastrar Nova Categoria</h3>
    <form action="create-categoria.php" method="post">
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

<?php require_once("../includes/footer-pages.php"); ?>
