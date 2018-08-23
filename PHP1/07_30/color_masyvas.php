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

$favColors= array('BlanchedAlmond', 'CadetBlue', 'BurlyWood', 'DarkOliveGreen', 'HotPink', 'PapayaWhip');

$favColors = [
    "BlanchedAlmond" =>  "#ffebcd",
    "CadetBlue" =>  "#5f9ea0",
    "BurlyWood" => "#deb887",
    "DarkOliveGreen" => "#556b2f",
    "HotPink" =>  "#ff69b4",
    "Papayawhip" =>  "#ffefd5",
];


$favColors['BlanchedAlmond'] = '#ffebcd';
$favColors['CadetBlue'] = '#5f9ea0';
$favColors['BurlyWood'] = '#deb887';
$favColors['DarkOliveGreen'] = '#556b2f';
$favColors['HotPink'] = '#ff69b4';
$favColors['Papayawhip'] = '#ffefd5';

?>

<table border="1">
<tr>
    <td colspan="1">Color Name</td>
    <td colspan="1">Hex Code</td>
</tr>
	<?php foreach($favColors as $pavadinimas => $spalva): ?>
		<tr>
			<td style="background: <?php echo $spalva; ?>;"><?php echo $pavadinimas; ?> </td>
			<td style="background: <?php echo $spalva; ?>;"><?php echo $spalva; ?> </td>
            
		</tr>
	<?php endforeach; ?>
</td> 




</table
</body>
</html>