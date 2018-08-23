<?php 

class Country {

	public $code;
	private $name;
	private $surfaceArea;
	private $db; // database

	function __construct($code, $data = NULL) {

		$this->code = strtoupper($code);
		if($data != NULL) {
			$this->mapObjectByArray($data);
		} else {
			$this->mapObject();
		}
		
		//echo "As esu salis: " . $this->name . ", mano kodas yra: " . $this->code . " mano plotas yra: " . $this->surfaceArea . "<br>";
	}

	private function mapObjectByArray($data) {
		$this->name = $data['name'];
		$this->surfaceArea = $data['surfaceArea'];
		
	}

	private function mapObject() {
		// Cia jungsimes prie duombazes ir. priskirsim objekto reiksmes;


		$this->db = new mysqli('localhost', "root", 'mysql', "salys");

		// Nustatome koduote
		$this->db->set_charset("utf8");

		$query = "SELECT * FROM countries WHERE code = '$this->code'";

		$result = $this->db->query($query);
		if($result) {
			while ($row = $result->fetch_assoc()) {
				$this->name = $row['name'];
				$this->surfaceArea = $row['surfaceArea'];
			}
		}

		echo mysqli_error($this->db);	
	}

	public function getSurfaceArea() {
		return $this->surfaceArea;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}
	

	public function save() {
		$query = "UPDATE countries SET name = '$this->name', surfaceArea = '$this->surfaceArea' WHERE code = '$this->code'";
		$this->db->query($query);
		echo mysqli_error($this->db);
	}

}