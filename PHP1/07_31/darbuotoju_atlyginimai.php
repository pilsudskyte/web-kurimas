<!DOCTYPE html>
<html>
<head>
	<title>Darbuotojai</title>
</head>
<body>
	<form>
		<label>
			Atlyginimai
		</label>
		<input type="text" name="atlyginimai">
		<input type="submit">
	</form>

	<?php 

		$atlyginimai1 = ["suma" => 380, "kiekis" => 0]; // iki 380
		$atlyginimai2 = ["suma" => 820, "kiekis" => 0]; // nuo 320 iki 820
		$atlyginimai3 = ["suma" => 1500, "kiekis" => 0]; // nuo 820 iki 1500
		$atlyginimai4 = ["suma" => 1500, "kiekis" => 0]; // daugiau nei 1500

		/* Patikriname ar forma buvo pateikta */
		if(isset($_GET['atlyginimai'])) {
			$atlyginimai = [];
			$atlyginimai = explode("," , $_GET['atlyginimai']);
			//var_dump($atlyginimai);
			foreach ($atlyginimai as $atlyginimas) {
				if($atlyginimas <= $atlyginimai1["suma"]) {
					$atlyginimai1["kiekis"]++;
				}
				else if($atlyginimas <= $atlyginimai2["suma"] ) {
					$atlyginimai2["kiekis"]++;
				}

				else if($atlyginimas <= $atlyginimai3["suma"]) {
					$atlyginimai3["kiekis"]++;
				}
				else if($atlyginimas > $atlyginimai4["suma"]) {
					$atlyginimai4["kiekis"]++;
				}
			}
		}
	?>
	<p>	
		Zmoniu kiekis kurie uzdirba iki 380 <?php echo $atlyginimai1["kiekis"];?> zmones
	</p>

	<p>	
		Zmoniu kiekis kurie uzdirba iki 820 <?php echo $atlyginimai2["kiekis"];?> zmones
	</p>

	<p>	
		Zmoniu kiekis kurie uzdirba iki 1500 <?php echo $atlyginimai3["kiekis"];?> zmones
	</p>

	<p>	
		Zmoniu kiekis kurie uzdirba daugiau nei 1500 <?php echo $atlyginimai4["kiekis"];?> zmones
	</p>

	Zmoniu uzdirbanciu daugiausia yra <?php
		$visiAtlyginimai = [$atlyginimai1["kiekis"],$atlyginimai2["kiekis"], $atlyginimai3["kiekis"], $atlyginimai4["kiekis"]];
		$max = 0;
		$maxIndex = 0;
		/* Ieskome kurioje grupeje daugiausiai zmoniu */
		foreach ($visiAtlyginimai as $key => $atlyginimoRezis) {
			if($atlyginimoRezis > $max) {
				$max = $atlyginimoRezis;
				$maxIndex = $key;
			}
		}

		if($maxIndex == 0) {
			echo " grupeje iki 380";
		} else if($maxIndex == 1) {
			echo " grupeje iki 820";
		} else if($maxIndex == 2) {
			echo " grupeje iki 1500";
		} else if($maxIndex == 3) {
			echo " grupeje virs 1500";
		} 

	 ?>



</body>
</html>