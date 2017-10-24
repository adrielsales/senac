<?php

session_start();

// Salva o usuário na sessão
$_SESSION['usuario_nome'] = 'José Maria';

// Resultado: José Maria
echo $_SESSION['usuario_nome'];

// Deleta uma variável da sessão
unset($_SESSION['usuario']);

// Destrói toda sessão
session_destroy();


 ?>
