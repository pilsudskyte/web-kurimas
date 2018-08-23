<?php
$servername = 'localhost';
$dbname = 'Imone';
$username = 'root';
$password = 'mysql';

$db = new mysqli('localhost', $username, $password, $dbname);

// Suformuojame SELECT užklausą
$sql = 'SELECT * FROM Darbuotojai';

// Vykdome suformuotą užklausą duomenų bazėje
$result = $db->query($sql); 

$Darbuotojai = [];

// Tikriname ar rezultate yra bent viena eilutė
if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) {
		$Darbuotojai[] = $row;
		//galim atspausdinti lentele su duomenimis:
		//echo $row['gender'];
	}
	
}

$sql = "SELECT gender, COUNT(*) as amount, ROUND(AVG(salary)) as vidurkis FROM darbuotojai 
WHERE gender
GROUP BY gender";

$result = $db->query($sql);



// TIK pvz,kode nenaudojama uzklausa
$sql2 = "SELECT education, COUNT(*) as kiekis, AVG(salary) as vidurkis FROM darbuotojai WHERE gender GROUP BY education";


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Baltic Talents</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
td {
	vertical-align: middle !important;
}
</style>

</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
					aria-expanded="false">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Baltic Talents</a>
			</div>

			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="statistika.php">Įmonės statistika</a></li>
				</ul>


			</div>
		</div>
	</nav>

	<div class="container" id="content" tabindex="-1">
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
					<!-- Default panel contents -->
					<div class="panel-heading">Įmonėje dirbančių darbuotojų statistika pagal išsilavinimą</div>


					<!-- Table -->
					<table class="table">
						<tr>
							<th>Lytis</th>
							<th>Kiekis</th>
							<th>Vidutinis užmokestis</th>
							
						</tr>
						<?php 
						while ($row = $result->fetch_assoc()) :  ?>
							<tr>
								<td><?php echo $row['gender']; ?></td>
								<td><?php echo $row['amount']; ?></td>
								<td><?php echo $row['vidurkis'];?></td>
							</tr>

							

						<?php endwhile;
						?>
					</table>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-primary">
					<!-- Default panel contents -->
					<div class="panel-heading">Darbuotojų statistika pagal lytį</div>


					<!-- Table -->
					<table class="table">
						<tr>
							<th>Lytis</th>
							<th>Kiekis</th>
							<th>Procentai</th>
							
						</tr>
						<tr>
							<td>Vyras</td>
							<td>6</td>
							<td>60 %</td>
						</tr>
						<tr>
							<td>Moteris</td>
							<td>4</td>
							<td>40 %</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		


	</div>
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

<style type="text/css">
	td {
		text-transform: capitalize;
	}
</style>
</body>
</html>