<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script src="http://www.chartjs.org/dist/2.7.2/Chart.bundle.js"> </script>

<canvas id="myChart" width="400" height="400"></canvas>

<?php 


$temperaturosMatavimai = [36.6, 39, 38.7, 38.9, 39];
$matavimuLaikas = ["13 45", "14 00", "15 55", "17 00", "18 00"];

$duomenys = [];

// $duomenys["13 45"];

for($i = 0; $i < count($matavimuLaikas); $i++) {
	$duomenys[$matavimuLaikas[$i]] = $temperaturosMatavimai[$i];
}

$maxTemperatura = 0;

arsort($duomenys);
// var_dump($duomenys);
?>





<script>
</script>

Didziausia temeperatura buvo: <?php foreach($duomenys as $key => $d) {
	echo $key . "val "  . $d;
	$maxTemperatura = $d;
	break; // sustabdo cikla
} ?>
<p>
Didziausia temperatura dar buvo : 
<?php foreach($duomenys as $key => $d) {
	if($maxTemperatura - $d < 0.5) {
		echo $key . "val. " . $d;
		echo "<br>";
	}
	
} ?>
</p>

<script type="text/javascript">
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?php echo json_encode($matavimuLaikas); ?>,
        datasets: [{
            label: 'Temperatura',
            data: <?php echo json_encode($temperaturosMatavimai); ?>,
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
</body>
</html>