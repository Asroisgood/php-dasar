<?php

$a = [
  'x' => 'nilai x',
  'y' => 'nilai y'
];

$b = [
  'y' => 'nilai y',
  'x' => 'nilai x'
];

var_dump($a == $b); // true karena key sama
var_dump($a === $b); // false karena urutan key tidak sama (tidak identik)

$firstName = [
  'first_name' => 'Arief'
];

$lastName = [
  'last_name' => "Asro'i"
];

$fullName = $firstName + $lastName;
$fullNameB = $lastName + $firstName;
var_dump($fullName);
var_dump($fullNameB);
