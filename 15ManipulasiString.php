<?php 

$name = "Galung Erlyan Tama";

echo "Name : ". $name . PHP_EOL;
echo "Value : ". 130 . PHP_EOL;

//mengganti value tipe data
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)100;
var_dump($valueInt);

$valueFloat = (float)0.100;
var_dump($valueFloat);

//mengakses Array
$name = "GET";

echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;

//variable parsing
echo "HELLO $name, Selamat Belajar PHP" .  PHP_EOL;

//curly brace
$var = "var";

echo "This is {$var}s" . PHP_EOL; 