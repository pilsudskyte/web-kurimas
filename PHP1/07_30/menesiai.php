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

$menesiuVardai = array(1=>'Sausis', 2=>'Vasaris', 3=>'Kovas', 4=>'Balandis', 5=>'Gegužė', 6=>'Birželis', 7=>'Liepa', 8=>'Rugpjutis', 9=>'Rugsėjis', 10=>'Spalis', 11=>'Lapkritis', 12=>'Gruodis');

$menesiuDienos = array (1=>31, 2=>28, 3=>31, 4=>30, 5=>31, 6=>30, 7=>31, 8=>31, 9=>30, 10=>31, 11=>30, 12=>31);

$dien31 = 0;
$dien30 = 0;
$dien28 = 0;

$men31 = [];
$men30 = [];
$men28 = [];

$visosDienos = 0;


foreach ($menesiuDienos as $key => $value) {

	$visosDienos += $value;

	if($value == 31) {
		$dien31++;
		array_push($men31, $menesiuVardai[$key]);
	}

	if($value == 30) {
		$dien30++;
		array_push($men30, $menesiuVardai[$key]);
	}

	if($value == 28) {
		$dien28++;
		array_push($men28, $menesiuVardai[$key]);
	}
}


function spausdintiMenesius($menesiai) {
	foreach ($menesiai as $menesis) {
			echo $menesis;
			echo " , ";
	}
}

?>
<p>
	Metuose yra <?php echo $dien31; ?> menesiu su 31 diena.
	(<?php spausdintiMenesius($men31); ?>)
</p>

<p>
	Metuose yra <?php echo $dien30; ?> menesiu su 30 diena.
	(<?php spausdintiMenesius($men30); ?>)
</p>

<p>
	Metuose yra <?php echo $dien28; ?> menesiu su 28 diena.
	(<?php spausdintiMenesius($men28); ?>)
</p>

<p>
	Metuose is viso yra <?php echo $visosDienos; ?> dienu
</p>

<?php 
	foreach ($menesiuVardai as $key => $value) {
		echo $value;
		echo " yra " . $key . " menesis";
		echo " jis turi " . $menesiuDienos[$key] . " dienu";
		echo "<br>";
	}
?>

</body>
</html>