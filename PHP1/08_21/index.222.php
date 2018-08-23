<!DOCTYPE>
<html>
<head>
<title>View</title>
</head>
<body>
<?php

include('config.php');

$result = $db->query("SELECT * FROM countries");

echo "<table border='1' cellpadding='10'>";
echo "<tr>
<th><font color='black'>Pavadinimas</font></th>
<th><font color='black'>Kodas</font></th>
<th><font color='black'>Plotas</font></th>
</tr>";

while($row = $result->fetch_assoc())
{

	
echo "<tr>";
echo '<td><b><font color="#66005f">' . $row['name'] . '</font></b></td>';
echo '<td><b><font color="#66005f">' . $row['code'] . '</font></b></td>';
echo '<td><b><font color="#66005f">' . $row['district'] . '</font></b></td>';
echo '<td><b><font color="#66005f">' . $row['population'] . '</font></b></td>';
echo '<td><b><font color="#66005f"><a href="edit.php?id=' . $row['id'] . '">Salis</a></font></b></td>';
echo "</tr>";

}

echo "</table>";
?>
<p><a href="insert.php">Insert new</a></p>
</body>
</html>

<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("Country.php");



$salis = ["name" => "Lenkija", "surfaceArea" => 500000000];

$lenkija = new Country("PL", $salis);

$countries = [];

$latvija = new Country("LV");

function getAllCodes() {
	global $countries;
	$codes = [];
	$db = new mysqli('localhost', "root", "mysql", "salys");

	// Nustatome koduote
	$db->set_charset("utf8");

	$query = "SELECT code FROM countries ORDER BY surfaceArea";

	$result = $db->query($query);
	if($result) {
		while ($row = $result->fetch_assoc()) {
			array_push($codes, $row['code']);
		}
	}

	foreach($codes as $code) {
		$newCountry = new Country($code);
		$countries[$code] = $newCountry;
	}
}
getAllCodes();

$countries["LT"]->setName("Lithuania");
$countries["LT"]->save();
?>

<table>
	<tr>
		<td>
			Pavadinimas
		</td>
		<td>
			Kodas
		</td>
		<td>
			Plotas
		</td>
	</tr>

		<tr>
			<td>
				<a href="salis.php">Lietuva</a>
			</td>
			<td>
				LT
			</td>
			<td>
				6500000
			</td>
		</tr>

		<tr>
			<td>
				<a href="salis.php">Lenkija</a>
			</td>
			<td>
				LV
			</td>
			<td>
				400000
			</td>
		</tr>

		<tr>
			<td>
				<a href="salis.php">Vokietija</a>
			</td>
			<td>
				EE
			</td>
			<td>
				1500000
			</td>
		</tr>
</table>
