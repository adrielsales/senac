<?php
require_once("../banco/conexao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$estado = $_POST['estado'];

$sql = "UPDATE marcas
        SET nome='{$nome}',
            descricao='{$descricao}',
            estado='{$estado}'
        WHERE id = '{$id}'";
$resultado = mysqli_query($conexao, $sql);
if($resultado){
  header("Location:listar-marcas.php?sucesso=Alterado+com+Sucesso!");
  die();
}
