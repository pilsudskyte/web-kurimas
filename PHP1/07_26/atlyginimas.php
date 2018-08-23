<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $pradinisAtlyginimas = 400;
    $bonusas = 0.05; //bonosas, kas metus 5%
    $norimasAtlyginimas = 1500;
    $metai = 0;

    while($pradinisAtlyginimas < $norimasAtlyginimas) {
        $metai++; //praejo vieni metai
        //Darbuotojo gavo algos pakelima
        $pradinisAtlyginimas += $pradinisAtlyginimas * $bonusas;
    }
    echo "Mano atlyginimas po " . $metai . " metu bus:  " . round($pradinisAtlyginimas, 2) . " Euru";
?>
</body>
</html>