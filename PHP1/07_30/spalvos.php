<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
<?php 
$spalvos=array('BlanchedAlmond', 'CadetBlue', 'BurlyWood', 'DarkOliveGreen', 'HotPink', 'PapayaWhip');
echo '<tr>';
foreach($spalvos as $spalva) 


echo "<td style='background-color: $spalva;> " . $spalva . '</td>';
echo '</tr>';
?>
</table>
</body>
</html>