<?php

function separador(){
	echo "<br><br><hr>";
}

/**
* função date();
* http://php.net/manual/pt_BR/function.date.php
* NÃO É SENSÍVEL AO setlocale
* date("", timestamp)
**/
echo "Exibindo uma data com a função date():<br>";
echo date("d/m/Y H:i:s");

separador();

/**
* função time(); 01/01/1970
* http://php.net/manual/pt_BR/function.time.php
* Pegando o timestamp atual
**/
echo "Pegando Timestamp com a função time():<br>";
echo time();

separador();

$timestamp = 1508263140;
echo "Timestamp para Data em String:<br>";
echo "O Timestamp $timestamp corresponde a seguinte data: "
. date("d/m/Y H:i:s", $timestamp);

separador();

echo "Data em String para Timestamp com a função strtotime('ano/mes/dia'):<br>";
//formato ano-mes-dia
$dataParaString = strtotime("2015-12-31");
echo $dataParaString;
echo "<br>";
echo date("d/m/Y", $dataParaString);

separador();

echo "Função strtotime com expressões:<br>";
$date2 = strtotime("now");
echo date("l, d/m/Y", $date2);
echo "<br><br>";

$date1 = strtotime("+1 week");
echo date("l, d/m/Y", $date1);
echo "<br><br>";

$date3 = strtotime("+1 week");
echo date("l, d/m/Y", $date3);
echo "<br><br>";

$date4 = strtotime("+15 day");
echo date("l, d/m/Y", $date4);

separador();

echo "Maior Data:<br>";
$dateUm = strtotime("2015-12-15");
$dateDois = strtotime("2015-12-15");

if ($dateUm > $dateDois) {
	echo date("d/m/Y", $dateUm) . " é maior que a data " .date("d/m/Y", $dateDois);
} elseif($dateUm < $dateDois){
	echo date("d/m/Y", $dateDois) . " é maior que a data " .date("d/m/Y", $dateUm);
} else {
	echo "As datas são iguais!";
}

 ?>
