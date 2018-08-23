<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <title>colis</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    .table, td {
		border: 1px solid gray;
		padding: 5px;
		text-align: center;
	}

    </style>
</head>
<body>
<h3>Vienas colis yra 2,54 cm. Sudarykite programą kuri pateiktų lentelę su centimetrais  nuo 1 iki 10 coliais ir atvirkščiai.</h3>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2">
      
    <table border="1" class="tbl">
    <td> col. </td> <td> cm. </td> 
<?php
for ($i = 1; $i <= 9; $i++) {
    echo '<tr>';
    echo "<td>" . $i . "</td>";
?>
    
<?php
    echo "<td>" .($i * 2.54). "</td>";
    echo '</tr>';   
}
?>
</table>



    </div>
    <div class="col-md-2">
     
    
    <table border="1" class="tbl">
<td> col. </td> <td> cm. </td> 
<?php
for ($i = 1; $i <= 9; $i++) {
    echo '<tr>';
    echo "<td>" .$i. "</td>";
    ?>
 
<?php 
    echo "<td>" .round(($i/2.54), 2). "</td>";
    echo '</tr>';
    
}
?>
    </table>



    </div>
  </div>
</div>
<div class="col-md-2">
<div class="col-md-2">
<div class="col-md-2">




