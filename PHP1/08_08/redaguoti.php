<?php
$servername = 'localhost';
$dbname = 'Imone';
$username = 'root';
$password = 'mysql';

$db = new mysqli('localhost', $username, $password, $dbname);


$id = mysqli_escape_string($db, $_GET['id']);


if(isset($_GET['education'])) {
	// Galim daryti atnaujinima


	// Patikrinam gauta reiksme
	$education = mysqli_escape_string($db,$_GET['education']);

	// Formuojam sql uzklausa
	$sqlUpdate = "UPDATE darbuotojai SET education = '$education' WHERE id = '$id'";


	// Siunciam uzklausa i duombaze
	$resultUpdate = $db->query($sqlUpdate);

	echo mysqli_error($db);

}


$sql = "SELECT * from darbuotojai WHERE id = $id";
$result = $db->query($sql);




?>


<form>
	<?php while ($row = $result->fetch_assoc()) : ?>
		<input type="text" name="education" value="<?php echo $row['education']; ?>">
		<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

	<?php endwhile; ?>

	<input type="submit">
</form>
