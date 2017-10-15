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
//var_dump($_GET);
$id = $_GET['id'];
$nome = $_GET['nome'];
$descricao = $_GET['descricao'];
$estado = $_GET['estado'];

$sql = "UPDATE tipos
        SET nome='{$nome}',
            descricao='{$descricao}',
            estado='{$estado}'
        WHERE id = '{$id}'";
$resultado = mysqli_query($conexao, $sql);
if($resultado){
  header("Location:listar-tipos.php?alterou=sucesso");
  die();
}
