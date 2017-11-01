<?php
define("SERVIDOR", "localhost");
define("USUARIO", "root");
define("SENHA", "");
define("BANCO", "login_db");

$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO);

if (!$conexao) {
  echo "Erro ao tentar conectar: <br>";
  echo("Descrição do Erro: " . mysqli_error($conexao));
  die();
}
