<?php

$a = 10;
$b = 5;

$result = $a + $b;
var_dump($result);

$resultNegative = -$result;
var_dump($resultNegative);

$resultPositive = +$result;
var_dump($resultPositive);


// sisa bagi
$resultModulo = 13 % 2;
var_dump($resultModulo);

$pangkat = $a ** 2;
var_dump($pangkat);

// Operator Penugasan Aritmatika

$total = 0;
$makan = 20_000;
$minum = 5_000;
$gorengan = 2_000;
$cash = 50_000;

$total += $makan;
$total += $minum;
$total += $gorengan;

echo "Total : " , $total;
echo "\nUang : " , $cash;
echo "\nKembalian : " , ($cash -= $total);