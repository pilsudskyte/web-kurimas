<?php
class StilizuotasTeksta {
    public $tekstas;
    private $spalva;
    private $dydis;

    function __construct($tekstas = "Welcome to my home page!", $spalva = "red", $dydis = 'style="font-size:16 px"') {
        $this->tekstas = "Welcome to my home page!";
        $this->spalva = 'red';
        $this->$dydis = 'style="font-size:16 px"';
	}

function setSpalva($spalva) {
    $this->spalva = $spalva;
}
function getSpalva() {
    return $this->spalva;
}

function setIsvesti() {
    $this->tekstas = $tekstas;
}

function getIsvesti() {
return $this->tekstas;
}

function keistiSpalva($spalva) {

}
function keistiDydi($dydis) {
    $this->dydis = $dydis;
}
}

$SenaAntraste = new StilizuotasTeksta();

$SenaAntraste->setSpalva("red");

$NaujaAntraste = new StilizuotasTeksta();

$NaujaAntraste->setSpalva("green");

$SenaAntraste->getIsvesti("Welcome to my home page!");

?>
