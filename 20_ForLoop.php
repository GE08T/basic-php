<?php 

$counter = 1;

for ( ; $counter <= 10 ; ){
	echo "Ini adalah for loop ke- $counter" . PHP_EOL;
	$counter++;
}

//innnit statement
for ($counter = 1; $counter <= 10 ; ){
	echo "Ini adalah for loop ke- $counter" . PHP_EOL;
	$counter++;
}

//post statement
for ($counter = 1; $counter <= 10; $counter++){
	echo "Ini adalah for loop ke- $counter" . PHP_EOL;
}

//alternativ
for ($counter = 10; $counter >= 1; $counter--):
	echo "Ini adalah for loop ke- $counter" . PHP_EOL;
endfor;