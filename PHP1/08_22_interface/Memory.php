<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("Device.php");
include("Product.interface.php");



final class Memory extends Device implements Product {
	private $type;
	private $amount;
	private $speed;

	public function __toString() {
		return "Atmintis " . $this->type;
	}

	public function getPrice() {
		return $this->price + ($this->price * 0.21);
	}

	public function setPrice($price) {
		$this->price = $price;
	}

	public function getName() {
		return $this->manufacturer . " " . $this->model; 
	}

	public function getInventoryDetails(Memory $product) {
		echo $product;
		echo $product->getName();
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

$memory2 = new Memory("31", "32");
$memory1->getInventoryDetails($memory2);




