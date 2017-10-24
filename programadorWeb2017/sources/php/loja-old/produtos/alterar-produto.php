<?php
require_once("../banco/conexao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$data_validade = $_POST['data_validade'];
$data_fabricacao = $_POST['data_fabricacao'];
$quantidade = $_POST['quantidade'];
$valor = $_POST['valor'];
$descricao = $_POST['descricao'];
$estado = $_POST['estado'];
$imagem = $_POST['imagem'];
$marca_id = $_POST['marca_id'];
$categoria_id = $_POST['categoria_id'];

$sql = "UPDATE categorias
        SET nome='{$nome}',
						data_validade = '{$data_validade}',
						data_fabricacao = '{$data_fabricacao}',
						quantidade = '{$quantidade}',
						valor = '{$valor}',
						imagem = '{$imagem}',
						marca_id = '{$marca_id}',
						categoria_id = '{$categoria_id}',
            descricao='{$descricao}',
            estado='{$estado}'
        WHERE id = '{$id}'";

$resultado = mysqli_query($conexao, $sql);
if($resultado){
  header("Location:listar-produtos.php?sucesso=Alterado+com+Sucesso!");
  die();
}
