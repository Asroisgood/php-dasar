<?php

// Array dalam PHP dapat berisikan banyak data dengan jenis data yang berbeda-beda
// Dinamis tidak ada batasan
// Index dimulai dari 0

$values = array(1, 2, 3, 4);
echo "\$values : ";
var_dump($values);
echo "\n";

$names = ["Arief", "Asro'i"];
echo "\$names : ";
var_dump($names);
echo "\n";

$arief = ["Arief Asro'i", 22];
echo "\$arief : ";
var_dump($arief);
echo "\n";

$kosong = [];
echo "\$kosong : ";
var_dump($kosong);
echo "\n";

// memanggil data dengan index
echo "\$arief[0] : ";
echo $arief[0];
echo "\n";

// mengubah isi data array dengan index
// tipe data dapat juga dirubah
$arief[1] = '22 tahun'; // int(22) berubah menjadi string('22 tahun')
echo "\$arief[1] : ";
echo $arief[1];
echo "\n";

// menambah data pada array => index paling terakhir
$arief[] = "Tampan";
echo "\$arief[2] : ";
echo $arief[2];
echo "\n";

// menghapus data pada array menggunakan index (indexnya juga akan hilang jadi index akan melompat)
echo "Ukuran array \$arief sebelum penghapusan : ";
echo count($arief);
unset($arief[2]);
echo "\nUkuran array \$arief setelah penghapusan : ";
echo count($arief);
echo "\n";


// MAP di PHP menggunakan Array
// seperti dictionary di Python atau Object di JavaScript

$asroi = array(
  "name" => "Asro'i",
  "hobby" => "Programming",
  "age" => 22,
  "address" => [
    'city' => 'Kendal',
    'province' => 'Jawa Tengah',
    'country' => 'Indonesia'
  ]
);

var_dump($asroi['hobby']);

$tobaclove = [
  "name" => "Tobaclove",
  "hobby" => "Gaming",
  "age" => 20
];

var_dump($tobaclove);

var_dump($asroi['address']['city']);


