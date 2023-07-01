<?php

$a = 0;

$b = $a++; // $a = 1 setelah mengisi $b | POST INCREMENT
$c = ++$a; // $a = 2 sebelum mengisi $c | PRE INCREMENT
var_dump($a); // hasil 2 karena sudah di ++ 2x
var_dump($b); // hasil 0 karena $b diisi nilai $a sebelum nilai $a di tambah
var_dump($c); // hasil 2 karena $c diisi dengan nilai $a yang telah ditambahkan 2x