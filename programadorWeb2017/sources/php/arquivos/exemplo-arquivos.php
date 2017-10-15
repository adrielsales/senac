<?php

//$file será do tipo resource, poios faz referência.
$file = fopen("log.txt", "w+");
fwrite($file, date("Y-m-d h:i:s"));
fclose($file);
echo "arquivo criado com sucesso."



?>
