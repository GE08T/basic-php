<?php 

$counter = 1;

while($counter <=10){
	echo "ini adalah While loop ke- $counter" . PHP_EOL;
	$counter++;
}

//alternativ
$counter = 1;

while($counter <=10) :
	echo "ini adalah While loop ke- $counter" . PHP_EOL;
	$counter++;
endwhile;