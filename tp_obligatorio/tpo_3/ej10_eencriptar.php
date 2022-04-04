<?php

/**
 *  encripta un número ingresado por el usuario 
 * Entero nro, cifra, d1, d2, d3, d4
 */

echo "ingrese un nro para encriptar :";
$nro = trim(fgets(STDIN));
echo $nro . " sera encriptado\n";

$cifra = (int)($nro / 1000);
$d1 = ($cifra + 7) % 10;
$nro = $nro % 1000;

$cifra = (int)($nro / 100);
$d2 = ($cifra + 7) % 10;
$nro = $nro % 100;

$cifra = (int)($nro / 10);
$d3 = ($cifra + 7) % 10;
$nro = $nro % 10;

$d4 = ($nro + 7) % 10;

$nro = $d3 * 1000 + $d4 * 100 + $d1 * 10 + $d2;

echo "El numero encriptado es :" . $nro . "\n";
?>
