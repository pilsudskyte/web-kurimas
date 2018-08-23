<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("Countrys.php");



// $salis = ["name" => "Lenkija", "surfaceArea" => 500000000];

// $lenkija = new Country("PL", $salis);


// echo $lenkija->getSurfaceArea();

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
// echo $countries["LT"]->getName();
$countries["LT"]->save();

?>

<form action="" method="POST">
<table border="1">
<tr>
<td width="150"><b><font color='#66005f'>PAVADINIMAS</font></b></td>
<td width="150"><b><font color='#66005f'>KODAS</font></b></td>
<td width="150"><b><font color='#66005f'>PLOTAS</font></b></td>
	</tr>
<?php foreach($countries as $country) : ?>

<td>
<a href="salis.php"><?php echo $country->getName(); ?></a>
</td>

<td>
<?php echo $country->getCode(); ?>	
</td>

<td>
<?php echo $country->getSurfaceArea(); ?>
</td>
</tr>

<?php endforeach; ?>

</table>
</form>

