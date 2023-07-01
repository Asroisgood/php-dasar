<?php

// membandingkan 2 nilai boolean
$a = true;
$b = true;
$c = false;

var_dump($a && $b); // true jika keduanya true
var_dump($a and $b); // true jika keduanya true
echo "\n";

var_dump($a || $c); // true jika salah satunya true
var_dump($c or $b); // true jika salah satunya true

echo "\n";
var_dump(!$a); // false karena $a berisi true (membalikkan nilai boolean)
var_dump(!$c); // true karena $c berisi false

echo "\n";
// xor => true apabila salah satunya true, namun akan false kalau keduanya true
var_dump($a xor $b); // false
var_dump($a xor $c); // true
var_dump($b xor $c); // true