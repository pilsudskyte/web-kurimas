<?php
$vartotojoSlaptazodis = "f6cac8d477ecdd07f40d6549515d53e183a3d04f"; // antanas nesirfruota reiksme

$vartojoVardas = "eim.kasp@gmail.com";
$slaptazodis = "Kaunas";

if(isset($_POST['pass'])) {
	$ivestis = $_POST['pass'];
	$sifruotaReiksme = sha1($ivestis);



	if($vartotojoSlaptazodis == $sifruotaReiksme) {
		// Vartotojo nukreipimas
		header("Location: http://localhost:83/PHP1/07_31/projektai.php");
	} else {

	}
}





echo $sifruotaReiksme;

?>


<form method="POST">
	<input type="password" name="pass">
	<input type="submit">
</form>