<?php

class Automobilis {
    private $spalva;
    private $numeris;
    public $degaluKiekis;
    public $bakoTalpa;

    function __construct($spalva = "Geltona", $numeris = "ASD 123", $bakoTalpa = 60) {
        $this->spalva = $spalva;
        $this->numeris = $numeris;
        $this->bakoTalpa = $bakoTalpa;
        $this->degaluKiekis = 0;
        $this->bakoTalpa = 60;
        echo "As esu konstruktorius, gaminu nauja masina";
        echo "<br>";   
    }

    function pripiltiDegalu($kiekis) {
        if($this->degaluKiekis + $kiekis > $this->bakoTalpa){
            $this->degaluKiekis = $this->bakoTalpa;
        } else { 
            $this->degaluKiekis += $kiekis;
        } 
    }
    function degaluLikutis() {
        return $this->degaluKiekis;
    }

}

//$manoAutomobilis = new Automobilis("Geltona", "RRR", 700);
$manoAutomobilis = new Automobilis();

// $manoAutomobilis->svalva = "Red";
// $manoAutomobilis->numeris = "ABC 123";

$manoAutomobilis->pripiltiDegalu(100);
$manoAutomobilis->pripiltiDegalu(50);
$manoAutomobilis->bakoTalpa = (20);

echo "Mano automobilis turi: " . $manoAutomobilis->degaluLikutis() . "<br>";


//var_dump($manoAutomobilis);

//$tavoAutomobilis = new Automobilis("Melyna", "RRR", 700);
$tavoAutomobilis = new Automobilis();

// $tavoAutomobilis->spalva = "green";
// $tavoAutomobilis->numeris = "RRR 666";

$tavoAutomobilis->pripiltiDegalu(10);

echo "Tavo automobilis turi: " . $tavoAutomobilis->degaluLikutis() . "<br>";

// echo "<br>";
//var_dump($tavoAutomobilis);

?>