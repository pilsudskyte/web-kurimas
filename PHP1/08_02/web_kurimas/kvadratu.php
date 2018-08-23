

<h1>Iveskite skaiciu </h1>
<form method="GET">
	<input type="text" name="skaicius">
	<input type="submit">
</form>


<?php 
// Tikrinam ar pateikta forma
if(isset($_GET['skaicius'])) {

	faktorialas($_GET['skaicius']);


	// Funkcjos kvietimas
	kvadratu($_GET['skaicius']);

}

// Tikrinam ar pateikta forma metu
if(isset($_GET['metai'])) {
	$metai = $_GET['metai'];
	$keliamieji = arKeliamiejiMetai($metai);  // true arba false

	if($keliamieji) {
		echo "Metai " . $metai . " yra keliamieji";
	} else {
		echo "Metai " . $metai . " yra ne keliamieji";
	}

}

?>

<?php 

function kvadratu($skaicius) {
	$kvadratu = $skaicius * $skaicius; ?> 
	<h2>Kvadratu</h2>
	<table>
		<tr> 
			<td><?php echo $skaicius; ?></td>
			<td><?php echo $kvadratu; ?> </td>
		</tr>
	</table>
 <?php }

 function faktorialas($skaicius) {
 	$rezultatas = $skaicius;
 	for($i = $skaicius - 1; $i > 0; $i--) {
 		$rezultatas = $rezultatas * $i;
 	}

 	echo "<h2>Faktorialas</h2>";
 	echo "<table>";
 	echo "<tr>";
 	echo "<td>";
 	echo $rezultatas;
 	echo "</td>";
 	echo "</tr>";
 	echo "</table>";
 }


 function arKeliamiejiMetai($metai) {
 	 if($metai % 400 == 0 || ($metai % 100 != 0 && $metai % 4 == 0)) {
 	 	return true;
 	 } else {
 	 	return false;
 	 }
 }


?>


<style>
table {
	border: 1px solid red;
}

td {
	border: 1px solid green;
	padding: 5px;
}
</style>

<h1>Iveskite metus </h1>
<form method="GET">
	<input type="text" name="metai">
	<input type="submit">
</form>


<head>
	<title>Labas</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">

</head>

<?php 


spausdintiHead("Mano puslapis", ["style.css", "bootstrap.css"]);

function spausdintiHead($title, $cssFiles) {

}


