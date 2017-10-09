<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
echo strftime("%A %B");
//echo date("d/m/Y");
echo "<br>";
$ts = strtotime("+15 day");
echo date("l, d/m/Y", $ts);

 ?>
