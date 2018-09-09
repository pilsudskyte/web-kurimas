
<?php 

class City {
	private $id;
	private $name;
    private $countryCode;
    private $district;
    private $population;
	private $db; // database

	function __construct($id, $data = NULL) {

		$this->id = strtoupper($code);
		if($data != NULL) {
			$this->mapObjectByArray($data);
		} else {
			$this->mapObject();
		}
		
		
	}

	private function mapObjectByArray($data) {
		$this->id = $data['id'];
		$this->name = $data['name'];
        $this->countryCode = $data['countryCode'];
        $this->istrict = $data['district'];
        $this->population = $data['population'];
		
	}

	private function mapObject() {
		// Cia jungsimes prie duombazes ir priskirsim objekto reiksmes;


		$this->db = new mysqli('localhost', "root", 'mysql', "salys");

		// Nustatome koduote
		$this->db->set_charset("utf8");

		$query = "SELECT * FROM city";

		$result = $this->db->query($query);
		if($result) {
			while ($row = $result->fetch_assoc()) {
				$this->id = $row['id'];
				$this->name = $row['name'];
                $this->countryCode = $row['countryCode'];
                $this->istrict = $row['istrict'];
                $this->population = $row['population'];
			}
		}
		$Vilnius = new City("Vilnius");

		$Kaunas = new City("Kaunas");

	}

}

	