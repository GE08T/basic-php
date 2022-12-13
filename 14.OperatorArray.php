<?php 

$first = [
	"first_name" => "Galung"
];

$last = [
	"first_name" => "Budi",
	"last_name" => "Erlyan"
];

$full = $first + $last; //diawal diutamakan
var_dump($full);

$a = [
	"first_name" => "budi",
	"last_name" => "Erlyan"
];

$b = [
	"last_name" => "Erlyan",
	"first_name" => "budi"
];

var_dump($a == $b);
var_dump($a === $b);