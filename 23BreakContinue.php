<?php 

//break
$counter = 6;

while (true) {
	echo "ini adalah while dengan break ke- $counter" . PHP_EOL;
	$counter++;

	if ($counter > 10) {
		break;
	}
}

//continue
for ($counter = 1; $counter <= 100; $counter++){
	if ($counter % 2 == 0) {
		continue;
	}
	echo "Hello Continue : $counter" . PHP_EOL;
}