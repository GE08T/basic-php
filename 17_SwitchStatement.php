<?php

$nilai = "C";

switch ($nilai) {
	case "A":
		echo "Anda lulus dengan sangat baik" . PHP_EOL;
		break;
	case "B":
	case "C":
		echo "Anda lulus" . PHP_EOL;
		break;
	default:
		echo "mungkin anda salah jurusan" . PHP_EOL;
		break;
}

//alternatif
switch ($nilai):
	case "A":
		echo "Anda lulus dengan sangat baik" . PHP_EOL;
		break;
	case "B":
	case "C":
		echo "Anda lulus" . PHP_EOL;
		break;
	default:
		echo "mungkin anda salah jurusan" . PHP_EOL;
		break;
endswitch;