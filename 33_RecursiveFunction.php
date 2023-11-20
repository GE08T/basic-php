<?php 

//Factorial function
function factorialLoop(int $value): int
{
	$total = 1;
	for ($i = 1; $i <= $value; $i++){
		$total *= $i;
	}

	return $total;
}

var_dump(factorialLoop(6));
var_dump(1*2*3*4*5*6);

//Factorial recursive function
function factorialReursive(int $value): int 
{
	if($value == 1){
		return 1;
	} else{
		return $value * factorialReursive($value - 1);
	}
}

var_dump(factorialReursive(5));