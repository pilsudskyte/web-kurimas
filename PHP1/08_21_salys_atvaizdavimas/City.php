<?php include 'country.php';

class City extends Country {

private $countryCode;
public $city;
public $population;

function __construct($code) {
$this->countryCode = $code;
self::connectDatabase("salys");
// $this->selectCitiesbyCountryCode();
}

public function selectCitybyCountryCode() {
  $sql = "SELECT countries.name, city.name, city.population FROM city JOIN countries ON countries.code = city.countryCode WHERE countryCode = '{$this->countryCode}'";
  $result = self::$conn->query($sql);
  if(!$result) {
    die("Query failed " . self::$conn->error);
  }
  $getResult = [];
  while($row = $result->fetch_assoc()) {
      array_push($getResult, $row);
  }
  return $getResult;
}


} //class
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>spaudinti</title>
  </head>
  <style>
   td, th {
     border: 1px solid #000;
   }
  </style>

  <body>
    <?php
      $code = strval($_GET['code']);
      $newCity = new City($code);
      $allCity = $newCity->selectCitybyCountryCode();

      echo "<h1>" . $allCity[0]["name"] . "</h1>";
      echo "<table> <tr><th>Miestas</th><th>Populiacija</th></tr>";
      foreach ($allCity as $key) {
        echo "<tr>";
        foreach (array_slice($key, 1) as $value) {
          echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
      }
      echo "</table>";
      echo "<a href='index.php'>Grizti atgal</a>";

  ?>

  </body>
</html>