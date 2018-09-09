<?php include 'city.php'; ?>
<?php 
function save() {
		$query = "EDIT city SET id= '$this->id' name = '$this->name',  countryCode= '$this->countryCode', district= '$district', population = '$this->population' WHERE id = '$this->id'";
		$this->db->query($query);
		echo mysqli_error($this->db);
	}
?>