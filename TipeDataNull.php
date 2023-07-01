<?php

// tidak case sensitive
// mengosongkan isi variable

$name = "Arief";
echo "\$name : ";
echo $name;
echo "\n";

$name = NULL;
echo "\$name : ";
echo $name;
echo "\n";

$age = null;
echo "\$age : ";
echo $age;
echo "\n";


//  mengecek sebuah variable null atau tidak
// hasil 1 (true) atau 0 (false)
echo "Is name Null? ";
echo is_null($name);
echo "\n";

echo "(var_dump) Is name Null? ";
echo var_dump(is_null($name));
echo "\n";


// menghapus variable
$example = "Arief";
unset($example);
echo "Variable tidak ada : ";
var_dump(isset($example)); // tidak ada variable 
echo "\n";

// isset digunakan untuk mengecek apakah ada variable dengan nama tersebut dan tidak berisikan null

$example = null;
echo "Variable tidak ada namun NULL : ";
var_dump(isset($example)); // Variable ada namun NULL
echo "\n";

$example = "Asro'i";
echo "Variable ada dan tidak NULL : ";
var_dump(isset($example)); // Variable ada dan tidak NULL
echo "\n";

