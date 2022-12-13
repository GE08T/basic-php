<?php 

$firstName = "Kurniawan";
$lastName = "Budi";

$arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $arrowFunction();