<?php 

$sayHello = function (string $name) {
	echo "Hello $name" . PHP_EOL;
};

$sayHello("Galung");
$sayHello("Kamu ");

function sayGoodBye(string $name, $filter)
{
	$finalName = $filter($name);
	echo "Good Bye $finalName" . PHP_EOL;
}

$filterFunction =function (string $name): string {
	return strtoupper($name);
};

sayGoodBye("EKO", $filterFunction);

$firstName = "Kuriniawan";
$lastName = "Eko";

$sayHelloEko = function () use ($firstName, $lastName) {
	echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloEko();