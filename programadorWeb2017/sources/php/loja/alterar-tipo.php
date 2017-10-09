<?php
require_once 'conexao.php';
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
  header("Location:listar-tipos.php?sucesso=Alterado+com+Sucesso!");
  die();
}
