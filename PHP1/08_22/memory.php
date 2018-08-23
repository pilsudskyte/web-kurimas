<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("Device.php");

class Memory extends Device {
	private $type;
	private $amount;
	private $speed;

	public function __toString() {
		return "Atmintis " . $this->type;
	}

	public function setType($name) {
		$this->type = $name;
	}

	public function setAmount($amount) {
		$this->amount = $amount;
	}

	public function setSpeed($speed) {
		$this->speed = $speed;
	}

	public function getCard() {
		// Coming soon
	}



}

$memory1 = new Memory("1", "2");

$memory1->setType("DDR3");

echo $memory1;

// Serial number yra public todel galiu ji pasiekti ir uz klases ribu
$memory1->serialNumber;