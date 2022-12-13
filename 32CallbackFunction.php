<?php 

function sayHello(string $name, callable $filter)
{
	$finalName = call_user_func($filter, $name);
	echo "Hello $finalName" . PHP_EOL;
}

sayHello("Eka", "strtoupper");
sayHello("Eka", "strtolower");
sayHello("Eko", fn($name) => strtoupper($name));
