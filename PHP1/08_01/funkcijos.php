<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$argumentas1 = 0;

$kintamasis = 6;


/* Funkcijos aprasymas */
function pavadinimas($argumentas1, $argumentas2) {
	// Lokali funkcijos sritis
	global $kintamasis;
	$kintamasis = $argumentas1 + $argumentas2 + 0.25;
	
	echo $kintamasis;

	return $kintamasis;
}





/* Funkcijos iskvietimas */
$rezultatas = pavadinimas(5, 6); // $rezultatas = 11.25


echo "<br>";


// Globalioje srityje
echo $kintamasis;


// pavadinimas(0, 1);
?>

</body>
</html>