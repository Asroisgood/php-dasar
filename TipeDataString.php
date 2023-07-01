<?php

echo 'Nama : ';
echo "Arief Asroi";
echo "\n";

echo "Nama : ";
echo "Arief\tAsro'i\n";

// Nama Tag dan penutup Tag harus sama (example: A) | Sifat seperti double quote "<text>"
echo <<<A

ini adalah Heredoc
Tipe data string multi-line
bisa tuh hehe :)
\n
A;

// Nama Tag dan penutup Tag harus sama (example: A) | Sifat seperti single quote '<text>'
echo <<<'A'
ini adalah Nowdoc
Tipe data string multi-line
bisa tuh hehe :)
A;


