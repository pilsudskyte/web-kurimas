<?php 

class Dog {
	public $name;

	public function __construct($name) {
		$this->name = $name;
	}

	public function bark() {
		echo $this->name . " says woof woof";
	}
}

class Poodle extends Dog {
	public $type;

	public function __construct($name, $type = "Standart") {
		//iskvieciame parent klases konstruktoriu
		parent::__construct($name);
		$this->type = $type;
	}


	public function set_type($height) {
		if ($height < 10) {
			$this->type = 'Toy';
		} 
		elseif ($height > 15) {
			$this->type = 'Standard';
		} 
		else {
			$this->type = 'Miniature';
		}
	}

	public function bark() {
		parent::bark();
	}
}


$pudelis = new Poodle("Sargis");

$pudelis->bark();
// $pudelis->set_type(20);
echo $pudelis->type;