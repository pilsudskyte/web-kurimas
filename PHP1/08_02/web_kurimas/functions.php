<?php
include("content.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if(empty($_GET['page'])) {
	$_GET['page'] = 1;
}

$argumentas1 = 0;

$kintamasis = 6;


/* Funkcijos aprasymas */
function pavadinimas($argumentas1, $argumentas2) {
	// Lokali funkcijos sritis
	global $kintamasis;
	$kintamasis = $argumentas1 + $argumentas2 + 0.25;
	
	//echo $kintamasis;

	return $kintamasis;
}





/* Funkcijos iskvietimas */
$rezultatas = pavadinimas(5, 6); // $rezultatas = 11.25
 

function generateHeader($title, $css) { 
			$baseCss = "css/"
			?>
			<head>
				<title><?php echo $title; ?></title>
				<?php foreach($css as $file) : ?>
					<link rel="stylesheet" type="text/css" href="<?php echo $baseCss . $file; ?>">
				<?php endforeach; ?>
				<meta name="viewport" content="width=device-width, initial-scale=1">
			</head>
		<?php  };


function generateMenu() {
	global $turinys;
	echo "<ul>";
	foreach($turinys as $key => $puslapis) {
		echo "<li><a href='head.php?page=" .  $key . "'>".  $puslapis["name"] . "</a></li>";
	}
	echo "</ul>";
}

?>
