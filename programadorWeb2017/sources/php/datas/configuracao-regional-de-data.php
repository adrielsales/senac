<?php

function separador(){
	echo "<br><br><hr>";
}

/**
* setlocale();
* http://php.net/manual/pt_BR/function.setlocale.php
**/
//argumentos: LC_ALL --> muda todo o padrão de linguagem para português.
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

/**
* strftime();
* SENSÍVEL AO setlocale
* http://php.net/manual/pt_BR/function.strftime.php
*/

echo "Representação textual abreviada do dia: <br>";
echo strftime("%a");
separador();

echo "Representação textual completa do dia: <br>";
echo strftime("%A");
separador();

echo "Dia do mês, com dois dígitos (com zeros à esquerda): <br>";
echo strftime("%d");
separador();

echo "Dia do mês, com dois dígitos (com zeros à esquerda): <br>";
echo strftime("%A, %d de %B de %Y");
separador();

//


 ?>
