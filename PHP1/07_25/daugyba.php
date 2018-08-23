<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">

   div#counts {
    display: inline-block;
    position: relative;
    color: blue;
}

.img {
    
    position: absolute;
}
    </style>
</head>
<body>
<div id="counts"> <?php
for ($i = 2; $i <= 2; $i++) {
      for ($j = 1; $j <= 12; $j++) {
          echo  $i. "x" .$j. "=" .$i * $j. "<br>";
          
      }
    }   
?>
</div>

<div> <img src="\PHP1\07_25\uzrasu2.jpg" width="250"  alt="" />
</div>
</body>
</html>