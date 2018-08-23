<?php 

class Device {

	// Public galime pasiekti bet kur ir klases viduje ir uz klases aprasymo ribu
	public $serialNumber;

	// Protected galima pasiekti ir klasese kurios paveldi device klase
	protected $manufacturer;

	// Private galime pasiekti tik tos klases viduje kurioje jis yra aprasytas
	private $model;
	private $sku;

	public function __construct($serialNumber, $sku) {
		$this->serialNumber = $serialNumber;
		$this->sku = $sku;
	}

	public function setManufacturer($name) {
		$this->manufacturer = $name;
	}

	private function getSerialNumber() {
		return $this->serialNumber;
	}

	public function setModel($model) {
		$this->model = $model;
	}

	private function getInventoryDetails() {
		// Coming soon
	}
}

/*
$device1 = new Device("123", "1");
$device1->setManufacturer("Sony");
$device1->setModel("Xperia");
*/


