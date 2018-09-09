<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Country {

	public $code;
	private $name;
	private $surfaceArea;
	private $db; // database

	function __construct($code) {

		$this->code = strtoupper($code);
		$this->mapObject();
		echo "As esu salis: " . $this->name . ", mano kodas yra: " . $this->code . " mano plotas yra: " . $this->surfaceArea . "<br>";
	}

	function mapObject() {
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

}
function newCountry($name){

}
function deleteCountry() {
	$resultDelete = "DELETE FROM countries WHERE id=$id";

}

$lietuva = new Country("LT");

$vokietija = new Country("DE");

$lenkija = new Country("POL");

?>