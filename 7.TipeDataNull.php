<?php

//menghapus variable
$name = "Galung";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

//mengecek name 
echo "Is Name Null? : ";
var_dump(is_null($name)); 
echo "\n";

//menghilangkan variable 
$contoh = "Galung";
unset($contoh);

$contoh = "halo";
$contoh = null;

//mengecek variable
var_dump(isset($contoh));