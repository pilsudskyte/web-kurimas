<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("HardDrive.php");


final class SSDHardDrive extends HardDrive {
	private $speed;

	public function __toString() {
		return "Atmintis " . $this->type;
    }

    public function setSpeed($speed) {
		$this->speed = $speed;
    }
    public function getCard() {
		// Coming soon
	}
}

