<?php

$a = 22;
$b = '22';

var_dump($a == $b); // true (tipe data otomatis diubah oleh PHP)
var_dump($a === $b); // false karena tipe data tidak sama

$c = '23';
var_dump($a != $c); // true karena setelah tipe data dikonversi hasilnya berbeda
var_dump($a <> $b); // false karena setelah tipe data dikonversi hasilnya sama
var_dump($a !== $b); // true karena tipe data yang berbeda
