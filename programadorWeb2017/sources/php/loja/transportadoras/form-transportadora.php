<?php
require_once("../includes/header.php");
require_once("../includes/menu.php");
 ?>

  <div class="container">
    <h3>Cadastrar Nova Transportadora</h3>
    <form action="create-transportadora.php" method="post">

			<div class="form-group">
        <label>Nome:</label>
        <input type="text" name="nome" class="form-control">
      </div>

			<div class="form-group">
        <input type="submit" name="enviar" value="Enviar">
      </div>

		</form>
  </div>

<?php require_once("../includes/footer.php"); ?>
