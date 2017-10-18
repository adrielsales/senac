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
* DateTime();
* SENSÍVEL AO setlocale
* http://php.net/manual/pt_BR/class.datetime.php
*/

$data = new DateTime();
echo $data->format("d/m/Y H:i:s");
separador();

/**
* DateInterval();
* http://php.net/manual/pt_BR/class.dateinterval.php
**/

echo "Somar 15 dias - criando um período com a classe DateInterval(): <br>";
$periodo = new DateInterval("P15D");
$data->add($periodo);
echo $data->format("d/m/Y H:i:s");

 ?>
