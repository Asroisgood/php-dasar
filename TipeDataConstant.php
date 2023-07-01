<?php
// constant tidak dapat dideklarasikan ulang (ditimpa) | Immutable

// define(<nama-constant>, <isi-constant>)
// nama constant disarankan menggunakan huruf KAPITAL | bersifat case sensitive
define("AUTHOR", "Arief Asro'i");
define("APP_VERSION", 2);

// pemanggilan variable constant tidak menggunakan tanda $
echo "AUTHOR : ";
echo AUTHOR;
echo "\n";

echo "APP_VERSION : ";
echo APP_VERSION;
echo "\n";