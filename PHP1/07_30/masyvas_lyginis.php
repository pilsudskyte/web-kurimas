<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Surasti didziausia lygini skaiciu</p>
<?php
    $m = [10,20,30,33,55,530,00];

    $max = PHP_INT_MIN; 
    // PHP_INT_MIN maziausia imanoma reiksme musu serveryje
    $maxIndex = 0;
    
    /* Susrasti didziausia lygini skaiciu */
    
    for($i = 0; $i < count($m); $i++) {
    
        if($m[$i] % 2 == 0 && $m[$i] != 0) {
            echo $m[$i] . " Yra lyginis";
            echo "<br>";
            if($m[$i] > $max) {
                $max = $m[$i];
                $maxIndex = $i;
            }
        }
    
    }
    
    echo "Didziausias skaicius: " . $max;
    echo "<br>";
    echo "Didziausias skaicius yra  " . $maxIndex . " Masyvo elementas";
?> 

</body>
</html>