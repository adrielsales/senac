<?php

define("SERVIDOR", "localhost"); 
define("USUARIO", "root"); 
define("SENHA", ""); 
define("BANCO", "fotosports_db"); 

$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO);

if (!$conexao) {
	echo "Erro ao tentar conectar: ";
	die();
}