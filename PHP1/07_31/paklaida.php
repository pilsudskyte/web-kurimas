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
      $arrayNumbers = [3.45, 2.55, 5.76, 3.87, 6.78, 7.99, 4.54, 8.11, 3.71, 5.53];
      $arrayCopy = $arrayNumbers;
      for($i=0; $i<count($arrayNumbers); $i++) {
        if($arrayNumbers[$i] == $arrayNumbers[0]) {
          $arrayNumbers[0] = Round(($arrayNumbers[0] + $arrayNumbers[1]) / 2);
        } elseif($arrayNumbers[$i] == $arrayNumbers[count($arrayNumbers) -1]) {
          $arrayNumbers[count($arrayNumbers) -1] = Round(($arrayNumbers[count($arrayNumbers) -1] + $arrayNumbers[count($arrayNumbers) -2]) / 2);
        } else {
          $arrayNumbers[$i] = Round(($arrayNumbers[$i -1] + $arrayNumbers[$i] + $arrayNumbers[$i +1]) / 3);
        }
      }
?>
//spausdinimas
<table>
  <?php for($j=0; $j<count($arrayNumbers); $j++) {
          echo "<tr>";
          echo "<td>" . $arrayCopy[$j] .  "</td>";
          echo "<td>" . $arrayNumbers[$j] .  "</td>";
          echo "</tr>";
        } ?>
</table>
</body>
</html>