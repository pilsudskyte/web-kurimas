<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

abstract class Device {

	// Public galime pasiekti bet kur ir klases viduje ir uz klases aprasymo ribu
	public $serialNumber;

	// Protected galima pasiekti ir klasese kurios paveldi device klase
	protected $manufacturer;

	
	protected $model;
	protected $sku;
	protected $price;


	// Abstrakti funkcija, neturi jokio funkcionalumo tik aprasyma ir visos klases kurios paveldi Device klase turi aprasyti sios funkcijos veikima
	abstract protected function getInventoryDetails(Memory $product);

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

}
