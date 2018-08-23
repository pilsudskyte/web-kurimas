<?php 

class Country {

	public $code;
	private $name;
	private $surfaceArea;
	private $population;
	private static $db; // database

	function __construct($code, $data = NULL) {
		self::connect();
		$this->code = strtoupper($code);
		if($data != NULL) {
			$this->mapObjectByArray($data);
		} else {
			$this->mapObject();
}	
		//echo "As esu salis: " . $this->name . ", mano kodas yra: " . $this->code . " mano plotas yra: " . $this->surfaceArea . "<br>";
	}

	public static function connect() {
		// Cia jungsimes prie duombazes ir. priskirsim objekto reiksmes;
		self::$db = new mysqli('localhost', "root", "mysql", "salys");
		// Nustatome koduote
		self::$db->set_charset("utf8");
	}

	private function mapObjectByArray($data) {
		$this->name = $data['name'];
		$this->surfaceArea = $data['surfaceArea'];

	}

	private function mapObject() {
// 		SELECT city *, countries * FROM salys
// JOIN  city.countryCode ON countries.code =  city.countryCode.code_id
		$query = "SELECT * FROM countries WHERE code = '$this->code'";

		$result = self::$db->query($query);
		if($result) {
			while ($row = $result->fetch_assoc()) {
				$this->name = $row['name'];
				$this->surfaceArea = $row['surfaceArea'];
				$this->population = $row['population'];
			}
		}

		echo mysqli_error(self::$db);	
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


	public function getCode() {
		return $this->code;
	}

	public function getPopulation() {
		return $this->population;
	}

	
	

	public function save() {
		$query = "UPDATE countries SET name = '$this->name', surfaceArea = '$this->surfaceArea' WHERE code = '$this->code'";
		self::$db->query($query);
		echo mysqli_error(self::$db);
	}

}