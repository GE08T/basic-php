<?php 

//dengan index
$names = ["Galung", "Erlyan", "Tama"];

foreach ($names as $index => $name) {
	echo "Data ke $index => $name" . PHP_EOL;
}


//dengan key
$person = [
	"first_name" => "Galung",
	"middle_name" => "Erlyan",
	"last_name" => "Tama"
];

foreach ($person as $key => $value) {
	echo "$key : $value" . PHP_EOL;
}