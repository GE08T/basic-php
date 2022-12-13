<?php 

$data = [
	"action" => null
];

if (isset($data["action"])){
	$action = $data["action"];
} else {
	$action = "Nothing";
}

echo $action . PHP_EOL;

// alternatif
$action = $data["action"] ?? "Nothing";

echo $action . PHP_EOL;