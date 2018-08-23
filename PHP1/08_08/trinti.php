<?php
$servername = 'localhost';
$dbname = 'Imone';
$username = 'root';
$password = 'mysql';

$db = new mysqli('localhost', $username, $password, $dbname);


$id = $_REQUEST['id'];

// Suformuojame DELETE užklausą
$sql = "DELETE FROM `Imone` WHERE `id` = ?"; 
$stmt = $conn->prepare($sql);

// Priskiriame parametrų reikšmes
$stmt->bind_param("i", $id);

// Vykdome DELETE užklausą
$stmt->execute();


echo json_encode([success => true]);
?>

<form>
	

	<input type="submit">
</form>
