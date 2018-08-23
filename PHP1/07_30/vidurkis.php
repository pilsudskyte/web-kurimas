<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vidurkis</title>
</head>
<body>
<form action="" method="POST">
   Skaiciai: <input type="text" min=0 name="skaiciai" placeholder="Iveskite skaicius">
    </div>
    <?php 
var_dump($_POST);
	$skaiciai = $_POST['skaiciai'];


$array = [];
$res = explode(',',$array);

$average = array_sum($array) / count($array);
 

echo "skaiciu vidurkis yra:" . round($average,2);
?>
 <div><button class="btn btn-lg btn-primary btn-block" type="submit">Skaičiuoti vidurki</button></div>  
</body>
</html>