<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("Device.php");
include("Product.interface.php");

final class Procesor extends Device implements Product {
	private $socket;
    private $speed;
    private $cores;
    
    public function __toString() {
		  return "Atmintis " . $this->type;
    }
    
    public function setSocket($type) {
		  $this->socket = $type;
    }
    
    public function setSpeed($speed) {
		  $this->speed = $speed;
    }
    
    public function setCores($cores) {
		  $this->cores = $cores;
    }
    
    public function getCard() {
		// Coming soon
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
}