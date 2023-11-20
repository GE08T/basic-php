<?php 

//Argument = Parameter 
function sayHello($name)
{
	echo "Hello $name" . PHP_EOL;
}

sayHello("Eka");
sayHello("Kamu");

//Default Value Argument
function sayHell($firstName, $lastName = " ")
{
	echo "Hello $firstName $lastName" . PHP_EOL;
}

sayHell("Eka");
sayHell("Kamu", "Eka");

//Kesalahan DVA jika argument lebih dari satu dan kita menyimpan argument itu di awal maka kurang berguna, tambahkan DVA di belakang

//menambahkan tipe data di function
function sum(int $first, int $last)
{
	$total = $first + $last;
	echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100, 2);
sum("100", "100");
sum(true, false);

//variable-length argument list
function sumAll(...$values)
{
	$total = 0;
	foreach ($values as $value) {
		$total += $value;
	}
	echo "TOtal " . implode(",", $values) . " = $total" . PHP_EOL;
}

sumAll(1, 2, 3, 4, 5);