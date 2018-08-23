<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Jonas ir Petras dalyvavo šaškių turnyre. Jonas surinko n taškų, o Petras m. <br> Nustatykite kuris iš dalyvių surinko daugiau taškų turnyre.</h3>
<form action="" method="POST">
		<div>
        <br>JONAS: 
			<input type="number" name="n" min=0>
		</div>
		<div>
			<br>PETRAS: 
			<input type="number" name="m" min=0><br>
		</div>

		<br><div><button class="btn btn-lg btn-primary btn-block" type="submit">Suzinok, kas laimejo</button></div>

	</form>
    <?php
$n = $_POST['n'];
$m = $_POST['m'];

if($n > $m)
{
    echo '<p style="background-color:silver;font-size:20px;width:100px;font-family:calibri ;">
    Laimetojas Jonas</p> ';
}

else if ($n < $m) 
{
    echo '<p style="background-color:silver;font-size:20px;width:100px;font-family:calibri ;">
      Laimetojas Petras </p> ';
} 
      else if ($n = $m) 
{
    echo '<p style="background-color:red;font-size:20px;width:100px;font-family:calibri ;">
      Lygiosios </p> ';
}

?>

</body>
</html>