<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
    </style>
</head>
<body> 
<h1>Apklausa</h1>
    <p> Koks tai gyvunas? </p>
     <?php
     $url = "https://upload.wikimedia.org/wikipedia/commons/8/8a/Dortmund-Zoo-IMG_5518-a2.jpg";
    
   
?> 

<!-- <?php echo '<img src="\07_24\elnias.jpg">'
?>  -->

    <img src="<?php echo $url; ?>" width="250"  alt="" />

<form method="POST" action="">
<div>
<input type="radio" name="radio" value="1" checked>Elnias
</div>
<div>
<input type="radio" name="radio" value="2">Sou
</div>
<div>
<input type="radio" name="radio" value="3">Katinas
</div>
<div>
<input type="radio" name="radio" value="4">Begemotas
</div>
<div><button class="btn btn-lg btn-primary btn-block" type="submit" value="Get Selected Values">Spekite</button></div>
</form>

<?php
$radioVal = $_POST["radio"];

if($radioVal == "1")
{
    echo '<p style="color:green;font-size:20px;font-family:calibri ;">
    Jusu atsakymas teisingas, tai Elnias</p> ';
}
else if ($radioVal == "2" || $radioVal == "3" || $radioVal == "4")
{
    echo '<p style="color:red;font-size:20px;font-family:calibri ;">
      Jusu atsakymas neteisingas </p> ';
}
?>

</body>
</html>