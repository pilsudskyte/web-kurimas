<?php include 'StilizuotasTekstas.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>

</style>
<body>
<div>
<h1>Welcome to my home page!</h1>
<?php
echo $SenaAntraste->getSpalva(). "<br>";
echo $NaujaAntraste->getSpalva(). "<br>";

echo $NaujaAntraste->getIsvesti();
?>
</body>
</html>