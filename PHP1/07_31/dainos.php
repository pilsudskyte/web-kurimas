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

$rockBands = array(
		array('Beatles','Love Me Do', 'Hey Jude','Helter Skelter'), 
		array('Rolling Stones','Waiting on a Friend','Angie', 'Yesterday\'s Papers'), 
		array('Eagles','Life in the Fast Lane','Hotel California', 'Best of My Love')
);

$rockBands[2][0]; // eagles

?>

<table border="1">
	<?php foreach($rockBands as $band) : ?>
    <tr style="background-color: grey;">
			<?php foreach ($band as $song) : ?>
				<td><?php echo $song; ?></td>
			<?php endforeach; ?>
		</tr>
	<?php endforeach; ?>
</table>
</body>
</html>