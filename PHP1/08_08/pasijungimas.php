<h1> Darbuotoju paieska</h1>
<form>
	<input type="text" name="min-salary" placeholder="Iveskite minimalia alga">
	<input type="submit">
</form>


<?php
$servername = 'localhost';
$dbname = 'Imone';
$username = 'root';
$password = 'mysql';

$db = new mysqli('localhost', $username, $password, $dbname);


// Nustatome koduote
$db->set_charset("utf8");

$oderColumn = "name";
$minSalary = 500;
if(isset($_GET['min-salary'])) {
	// Isvalom vartotojo ivestas reiksmes
	$minSalary = mysqli_real_escape_string($db, $_GET['min-salary']);
}

$query = "SELECT * FROM darbuotojai WHERE salary > $minSalary ORDER BY $oderColumn ASC";

$result = $db->query($query);

echo mysqli_error($db);

?> 

<table border="1">
<?php 
if($result) : 
	while ($row = $result->fetch_assoc()) : ?>
		<tr>
			<?php foreach($row as $stulpelis): ?>
				<td><?php echo $stulpelis; ?></td>
			<?php endforeach; ?>
		</tr>
	<?php endwhile; ?>

</table>
<?php endif; ?>


<?php
$query = "SELECT * COUNT(ID) AS Darbuotoju skaicius FROM `Darbuotojai`"; 

?>

