<?php

$values = array(9, 8, 7, 6, 4.5);
var_dump($values);

$names = ["kamu", "itu", "pinter"];
var_dump($names);

//mengakses data array
var_dump($names[0]);

//mengubah data array
$names[0] = "anda";
var_dump($names);

//menghapus data array index / urutan hilang
unset($names[1]);
var_dump($names);

//menambah data array pos belakang
$names[] = "kami";
var_dump($names);

//menghitung jumlah array
var_dump(count($names));

//array dalam array
$eko = array(
	"id" => "eko",
	"name" => "Eko Kurniawati",
	"age" => 30,
	"address" => [
		"city" => "Ponorogo",
		"country" => "Indonesia"
	]
);

var_dump($eko["name"]);
var_dump($eko["name"]["city"]);

$budi = [
	"id" => "budi",
	"name" => "Budi Nugraha",
	"age" => 23,
	"address" => [
		"city" => "Ponorogo",
		"country" => "Indonesia"
	]
];

var_dump($budi);