<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rikiavimas</title>
</head>
<h3> Duotas masyvas
$color = array('white', 'green', 'red', 'blue', 'black');
Surikiuokime masyvo elementus didėjimo tvarka ir juos išveskime į ekraną. </h3>
<body>
<?php
$color = array('white', 'green', 'red', 'blue', 'black');
asort($color) ;

    foreach($color as $colors)
    {
    echo "<br>";   
    echo $colors;
    }
    ?>
</body>
</html>