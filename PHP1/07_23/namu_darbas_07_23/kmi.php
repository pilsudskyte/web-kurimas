<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>KMI (kūno masės indekso) skaičiuoklė</h1>
    <h3>Kūno Masės Indeksas (KMI) - tai ūgio ir svorio santykio rodiklis, leidžiantis
        įvertinti ar žmogaus svoris normalus ar yra antsvoris bei nutukimas. Šis indeksas
a       pskaičiuojamas pagal formulę: KMI = Kūno masė (kg) / Ūgis (m*m).<h3>
    <h3> Norėdami apskaičiuoti savo KMI įveskite žemiau esančius duomenis</h3>

    <form action="rezultatas.php" method="POST">
    Svoris (kg.): <input type="number" min=0 name="kg" require name="svoris"  placeholder="Iveskite svori">
    </div>
    Ūgis (cm.): <input type="number" name="cm" placeholder="Iveskite ugi">
    <div>
        <br>
    <div><button class="btn btn-lg btn-primary btn-block" type="submit">Skaičiuoti KMI</button></div>  
</form>
    
</body>
</html>