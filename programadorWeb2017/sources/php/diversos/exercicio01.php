<?php

function dump($data)
{
  echo "<pre>"; var_dump($data); echo "</pre>";
}

$nomes = ["João", "Maria", "Arnaldo", "Luiz"];
sort($nomes);
dump($nomes);

echo $_SERVER["REMOTE_ADDR"];
echo "<br>";
echo $_SERVER["SERVER_PORT"];
echo "<br>";
echo $_SERVER["SERVER_NAME"];

 ?>
