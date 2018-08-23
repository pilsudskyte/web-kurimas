<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<h1> Darbuotoju paieska</h1>
<form>
	<input type="text" name="min-salary" placeholder="Iveskite minimalia alga">
	<input type="submit">
</form>

<?php
$servername = 'localhost';
$dbname = 'Imone';
$username = 'root';
$password = 'mysql';

$db = new mysqli('localhost', $username, $password, $dbname);


// Nustatome koduote
$db->set_charset("utf8");


$queryZmoniuSkaicius = "SELECT COUNT(*) as kiekis from darbuotojai";
$resultZmoniuSkaicius = $db->query($queryZmoniuSkaicius);
$zmoniuSkaicius;
while ($row = $resultZmoniuSkaicius->fetch_assoc()) {
	$zmoniuSkaicius = $row['kiekis'];
}



// Uzklausa
$queryVidAtlyginimas = "SELECT AVG(salary) as vidurkis from darbuotojai";

// Rezultato objektas
$rezVidAtlyginimas = $db->query($queryVidAtlyginimas);
$vidAtlyginimas = 0;

// Rezultatu gavimas
while ($row = $rezVidAtlyginimas->fetch_assoc()) {
	$vidAtlyginimas = $row['vidurkis'];
}


// Uzklausa su keliom agregatinem funkcijomis
$queryMaxAtlyginimas = "SELECT MAX(salary) as max, MIN(salary) as min from darbuotojai";
// Rezultato objektas
$rezMaxAtlyginimas = $db->query($queryMaxAtlyginimas);
$maxAtlyginimas = 0;
$minAtlyginimas = 0;

// Rezultatu gavimas
while ($row = $rezMaxAtlyginimas->fetch_assoc()) {
	$maxAtlyginimas = $row['max'];
	$minAtlyginimas = $row['min'];
}


?>

<div class="col-md-6">
				<div class="panel panel-primary">
					<!-- Default panel contents -->
					<div class="panel-heading">Įmonės statistika:</div>

					<!-- Table -->
					<table class="table">
						<tr>
							<th>Įmonėje dirbančių žmonių skaičius</th>
							<td><?php echo $zmoniuSkaicius; ?></td>
						</tr>

						<tr>
							<th>Vidutinis darbo užmokestis</th>
							<td><?php echo $vidAtlyginimas; ?> EUR</td>
						</tr>
						<tr>
							<th>Minimalus darbo užmokestis</th>
							<td><?php echo $minAtlyginimas; ?> EUR</td>
						</tr>
						<tr>
							<th>Maksimalus darbo užmokestis</th>
							<td><?php echo $maxAtlyginimas; ?> EUR</td>
						</tr>
					</table>
				</div>
			</div>