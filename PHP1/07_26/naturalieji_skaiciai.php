<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3> Į įvedimo laukus įvedami du natūralieji skaičiai: m ir n. <br> 
Parašykite programą kuri apskaičiavusi išvestų šių dviejų skaičių bendrą mažiausią kartotinį:</h3>
<form action="" method="GET">
		<div>
			X: 
			<input type="text" name="m" value="" >
		</div>
        <br>
		<div>
			Y: 
			<input type="text" name="n" value="" >
		</div>
        <br>
		<input type="submit">

	</form>
	  
<?php
	
	$m = $_GET['m'];
	$n = $_GET['n'];
    $gcd = gmp_gcd( $m, $n );
  
   // MBK(24; 32)=(24*32)/(DBD(24; 32))=768/8=96
	$rezultatas = $m * $n/$gcd ;
?>

<p>
Dviejų skaičių bendras mažiausias kartotinis yra:  <?php echo $rezultatas; ?>
</p>
</body>
</html>