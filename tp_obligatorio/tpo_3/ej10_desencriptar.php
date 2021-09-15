<?php
/**
 *  desencripta un número ingresado por el usuario
 * ENTERO nro, cifra, cociente, d1, d2, d3, d4
 */

echo "ingrese un nro para desencriptar :";
$nro = trim(fgets(STDIN));
echo $nro . " sera desencriptado\n";

$cifra = (int)($nro / 1000);
$cociente = ($cifra > 6) ? 0 : 1;
$d1 = 10 * $cociente + $cifra - 7;
$nro = $nro % 1000;

$cifra = (int)($nro / 100);
$cociente = ($cifra > 6) ? 0 : 1;
$d2 = 10 * $cociente + $cifra - 7;
$nro = $nro % 100;

$cifra = (int)($nro / 10);
$cociente = ($cifra > 6) ? 0 : 1;
$d3 = 10 * $cociente + $cifra - 7;
$nro = $nro % 10;

$cociente = ($nro > 6) ? 0 : 1;
$d4 = 10 * $cociente + $nro - 7;

$nro = $d3 * 1000 + $d4 * 100 + $d1 * 10 + $d2;

echo "El numero desencriptado es :" . $nro . "\n";

