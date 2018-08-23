<?php 

class Automobilis {

	private $spalva;

	private $numeris;

	private $degaluKiekis; // Litrais

	private $bakoTalpa;

	// Konstruktorius
	function __construct($spalva = "Melyna", $numeris = "555",  $bakoTalpa = 60) {
		$this->spalva = $spalva;
		$this->numeris = $numeris; 
		$this->bakoTalpa = $bakoTalpa;
		$this->degaluKiekis = 0;
	}

	// Klases metodas
	function pripiltiDegalu($kiekis) {
		if($this->degaluKiekis + $kiekis > $this->bakoTalpa) {
			$this->degaluKiekis = $this->bakoTalpa;
		} else {
			$this->degaluKiekis += $kiekis;
		}
	}

	function degaluLikutis() {
		return $this->degaluKiekis;
	}

	function getNumeris() {
		return $this->numeris;
	}

	function setSpalva($spalva) {
		$this->spalva = $spalva;
	}

	function getSpalva() {
		return $this->spalva;
	}

}

/* Mano automobilis */
$manoAutomobilis = new Automobilis("Geltona", "RRR", 700);


$manoAutomobilis->setSpalva("juoda");


$manoAutomobilis->pripiltiDegalu(100);
$manoAutomobilis->pripiltiDegalu(50);


echo "Mano automobilis turi: " . $manoAutomobilis->degaluLikutis() . "<br>";


/* Tavo automobilis */
$tavoAutomobilis = new Automobilis();


$tavoAutomobilis->pripiltiDegalu(10);


$mamosAutomobilis = new Automobilis();

$mamosAutomobilis->pripiltiDegalu(70);


echo "Mamos automobilis turi: " . $mamosAutomobilis->degaluLikutis() . "<br>";


// var_dump($tavoAutomobilis);
echo "Tavo automobilis turi: " . $tavoAutomobilis->degaluLikutis() . "<br>";



// $manoAutomobilis = ["spalva" => "raudona", "numeris" => "ABC 123"];