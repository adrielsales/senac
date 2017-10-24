<?php

echo "MD5<br>";

$frase1 = 'Curso Programador Web 2017';
$codificada1 = md5($frase1);

$frase2 = 'números 123';
$codificada2 = md5($frase2);

echo "Frase 1: $codificada1";
//Resultado: Frase 1: 242d757f2f4d359e0f65cbca15aa5965
echo "<br>";

echo "Frase 2: $codificada2";
//Resultado: Frase 2: 9a739b87fa1aabcaae073251fcbceab5


echo "<br><hr><br>";

echo "SHA1<br>";

$frase1 = 'Curso Programador Web 2017';
$codificada1 = sha1($frase1);

$frase2 = 'números 123';
$codificada2 = sha1($frase2);

echo "Frase 1: $codificada1";
//Resultado: Frase 1: b34c81ca15b12cf7426d3b7c51beb07af367fa2e
echo "<br>";

echo "Frase 2: $codificada2";
//Resultado: Frase 2: 4d54767be4fa01bf9eb720cff625a461da29a198


echo "<br><hr><br>";

echo "BASE64<br>";

$string = 'Curso Programador Web 2017';
$codificada = base64_encode($string);
echo "Codificado: $codificada";
//Resultado: Codificado: Q3Vyc28gUHJvZ3JhbWFkb3IgV2ViIDIwMTc=
echo "<br>";
$original = base64_decode($codificada);
echo "Decodificado: $original" ;
//Resultado: Decodificado: Curso Programador Web 2017


 ?>
