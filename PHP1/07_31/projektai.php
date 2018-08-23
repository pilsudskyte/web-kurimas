<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>

<canvas id="myChart" width="400" height="400"></canvas>
<?php
session_start();

$inactive = 5;


if (isset($_SESSION["timeout"])) {
  
    $sessionTTL = time() - $_SESSION["timeout"];
    if ($sessionTTL > $inactive) {
        session_destroy();
        header("Location: http://localhost:83/PHP1/08_06/failu_narsymas/sifravimas.php"); 
    }
}

$_SESSION["timeout"] = time();

?>
<?php 

$projects = array(
		array('id' => '1','short_name' => 'BIO-C3','year' => '2014','program' => 'BONUS','price' => '3700000'),
		array('id' => '2','short_name' => 'TRIPOLIS','year' => '2014','program' => 'LMT','price' => '79385'),
		array('id' => '4','short_name' => 'BALTCOAST','year' => '2015','program' => 'BONUS','price' => '2868208'),
		array('id' => '5','short_name' => 'BSCP','year' => '2015','program' => 'EASME','price' => '784000'),
		array('id' => '6','short_name' => 'BALMAN','year' => '2015','program' => 'LMT,  Lithuania - Latvia - China (Taiwan) research project fund','price' => '667623'),
		array('id' => '8','short_name' => 'MAURAKUMA','year' => '2014','program' => 'LMT','price' => '78921'),
		array('id' => '9','short_name' => 'BALSAM','year' => '2013','program' => 'European Commission, Marine Strategy Framework Directive pilot projects','price' => '461803'),
		array('id' => '10','short_name' => 'DEVOTES','year' => '2012','program' => 'European Commission, 7 BP','price' => '136651'),
		array('id' => '11','short_name' => 'MARES','year' => '2012','program' => 'ERASMUS MUNDUS, Horizon 2020','price' => '100800'),
		array('id' => '12','short_name' => 'VECTORS','year' => '2012','program' => 'European Commission, 7 BP','price' => '15237662'),
		array('id' => '13','short_name' => 'DENOFLIT','year' => '2010','program' => 'LIFE+ Nature & Biodiversity','price' => '1569699'),
		array('id' => '14','short_name' => 'TRUFFLE','year' => '2012','program' => 'Latvia-Lithuania Cross Border Cooperation Programme ','price' => '319440'),
		array('id' => '15','short_name' => 'LAKES FOR FUTURE','year' => '2012','program' => 'Latvia-Lithuania Cross Border Cooperation Programme ','price' => '1012554'),
		array('id' => '16','short_name' => 'IANUS','year' => '2012','program' => 'LMT','price' => '221530'),
		array('id' => '17','short_name' => 'PROTEUS','year' => '2012','program' => 'LMT','price' => '99542'),
		array('id' => '18','short_name' => 'SAMBAH','year' => '2010','program' => 'LIFE+ Nature & Biodiversity','price' => '80282'),
		array('id' => '19','short_name' => 'PREHAB','year' => '2010','program' => 'BONUS','price' => '263630'),
		array('id' => '20','short_name' => 'KRABAS','year' => '2011','program' => 'LMT','price' => '43153'),
		array('id' => '21','short_name' => 'MEECE','year' => '2008','program' => 'European Commission, 7 BP','price' => '6499745'),
		array('id' => '22','short_name' => 'EEE','year' => '2008','program' => 'The Norwegian Financial Mechanism and the Republic of Lithuania','price' => '989072'),
		array('id' => '23','short_name' => 'MOPODECO','year' => '2010','program' => 'Nordic countries Council of Ministers','price' => '100544'),
		array('id' => '24','short_name' => 'Cross-border DISCOS','year' => '2012','program' => 'Latvia-Lithuania Cross Border Cooperation Programme ','price' => '778108'),
		array('id' => '25','short_name' => 'Cross-border DISCOS','year' => '2012','program' => 'Latvijos ir Lietuvos bendradarbiavimo per sieną programa - LATLIT','price' => '778'),
		array('id' => '26','short_name' => 'JRTC','year' => '2010','program' => 'LATLIT, Interreg, Latvia-Lithuania Cross Border Cooperation Programme ','price' => '528793')
);

$sort = $_GET['sort'];

function cmp($a, $b) { 
	global $sort;
	if ($a[$sort] == $b[$sort]) {
		return 0; 
	}
	return ($a[$sort] > $b[$sort]) ? -1 : 1; 
}

function cmpDESC($a, $b) { 
	global $sort;
	if ($a[$sort] == $b[$sort]) {
		return 0; 
	}
	return ($a[$sort] < $b[$sort]) ? -1 : 1; 
}

if($_GET['order'] == "ASC") {
	uasort($projects, 'cmp');
} else if($_GET['order'] == "DESC") {
	uasort($projects, 'cmpDESC');

}


$kainaPagalMetus = [];

foreach($projects as $project) {
	if(isset($kainaPagalMetus[$project['year']])) {
		$kainaPagalMetus[$project['year']] += $project['price'];

	} else {
		$kainaPagalMetus[$project['year']] = 0;
		$kainaPagalMetus[$project['year']] += $project['price'];
	}
}


ksort($kainaPagalMetus);

$order = "ASC";
if($_GET['order'] == "ASC") {
	$order = "DESC";
}

?>


<table border="1">
	<tr>
		<th><a href="?sort=short_name&order=<?php echo $order; ?>">Pavadinimas</a></th>
		<th><a href="?sort=year&order=<?php echo $order; ?>">Year</a></th>
		<th><a href="?sort=program&order=<?php echo $order; ?>">Programa</a></th>
		<th><a href="?sort=price&order=<?php echo $order; ?>">Price</a></th>

	</tr>
	<?php foreach($projects as $project) : ?>
		<tr>
			<td>
				<a href="?sort=short_name">
					<?php echo $project['short_name']; ?>
				</a>
			</td>
			<td><?php echo $project['year']; ?></td>
			<td><?php echo $project['program']; ?></td>
			<td><?php echo $project['price']; ?></td>
		</tr>
	<?php endforeach; ?>
</table>

<?php 
	if($_GET['sort2'] == 'metai') {
		ksort($kainaPagalMetus);
	} else if($_GET['sort2'] == 'apyvarta') {
		asort($kainaPagalMetus);
	}
?>
<h1>Apyvarta pagal metus</h1>
<table border="1">
		<tr>
			<td><a href="?sort2=metai">Metai</a></td>
			<td><a href="?sort2=apyvarta">Apyvarta</a></td>
		</tr>
	
		<?php foreach($kainaPagalMetus as $key => $value) : ?>
			<tr>
				<td> <?php echo $key; ?></td>
				<td> <?php echo $value; ?> €</td>
			</tr>	
		<?php endforeach; ?>
</table>



<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php foreach ($kainaPagalMetus as $key => $value) {
        	echo $key;
        	echo ",";
        } ?>],
        datasets: [{
            label: 'Apyvarta pagal metus',
            data: [
            	<?php foreach ($kainaPagalMetus as $key => $value) {
        			echo $value;
        			echo ",";
        		} ?>
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
	</script>

<style>
	#myChart {
	width:20%;
    height:20%;
	}
</style>

</body>
</html>