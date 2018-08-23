<!DOCTYPE html>
<html lang="en">
<head>
  <title>gyvunu_apklausa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  .body {
      margin: 2px;
  }
    h1 {
    text-align: center;
}
button.btn.btn-primary {
    margin: auto;
    display: block;
}
    </style>

</head>
<body> 
<div class="container-fluid">
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4" class="text-center"><h1>APKLAUSA</h1></div>
    <div class="col-sm-4"></div>
  </div>
</div>
  <div class="row">
    <div class="col-sm-4" style="background-color:lavender;">
    <!-- <?php
     echo $url = "https://upload.wikimedia.org/wikipedia/commons/8/8a/Dortmund-Zoo-IMG_5518-a2.jpg";
     $image = file_get_contents("$url");
     echo $image;
?> -->
 <p> Koks tai gyvunas? </p>
<img src="\PHP1\07_24\elnias.jpg" width="250"  alt="" />

<form method="POST" action="">
<div>
<input type="radio" name="radio" value="1">Elnias
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
    </div>
</form>
    <div class="col-sm-4" style="background-color:lavender;">
    <!-- <?php
     echo $url = "https://g1.dcdn.lt/images/pix/suo-67990964.jpg";
     $image = file_get_contents("$url");
     echo $image;
?> -->

 <p> Koks tai gyvunas? </p>
 <img src="\PHP1\07_24\suo.jpg" width="250"  alt="" />
 <form method="POST" action="">
<div>
<input type="radio" name="radio" value="5" >Elnias
</div>
<div>
<input type="radio" name="radio" value="6">Sou
</div>
<div>
<input type="radio" name="radio" value="7">Katinas
</div>
<div>
<input type="radio" name="radio" value="8">Begemotas
</div>
</div>
</form>
    <div class="col-sm-4" style="background-color:lavender;">
    <!-- <?php
     echo $url = "https://g2.dcdn.lt/images/pix/kate-asociatyvi-nuotr-70413062.jpg";
     $image = file_get_contents("$url");
     echo $image;
?> -->

 <p> Koks tai gyvunas? </p>
 <img src="\PHP1\07_24\kate.jpg" width="250"  alt="" />
 <form method="POST" action="">
<div>
<input type="radio" name="radio" value="9" >Elnias
</div>
<div>
<input type="radio" name="radio" value="10">Sou
</div>
<div>
<input type="radio" name="radio" value="11">Katinas
</div>
<div>
<input type="radio" name="radio" value="12">Begemotas
</div>
</form>
    </div>
  </div>
</div>
<br>
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4"><button type="button" class="btn btn-primary" type="submit" value="Get Selected Values">SPEKITE</button></div>
    <div class="col-sm-4"></div>
  </div>


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


 

 
 

