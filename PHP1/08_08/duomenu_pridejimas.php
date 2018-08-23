<form method="POST" >
	<input type="text" placeholder="Vardas" name="vardas">
	<input type="text" placeholder="Pavarde" name="surname">
	<select name="gender">
		<option value="vyras">Vyras</option>
		<option value="moteris">Moteris</option>
	</select>

	<input type="text" placeholder="phone" name="phone">
	<input type="text" placeholder="education" name="education">
	<input type="date" placeholder="birthday" name="birthday">
	<input type="text" placeholder="salary" name="salary">

	<input type="submit">
</form>
<?php
$servername = 'localhost';
$dbname = 'Imone';
$username = 'root';
$password = 'mysql';

$db = new mysqli('localhost', $username, $password, $dbname);


// Jei forma uzpildytas
if(!empty($_POST['vardas']) && !empty($_POST['surname'])) {


	// Cia darome gerai
	$name = mysqli_real_escape_string($db, $_POST['vardas']);
	$surname = mysqli_real_escape_string($db, $_POST['surname']);


	// Cia darome blogai,nes baigesi kantrybes
	$gender = $_POST['gender'];
	$phone = $_POST['phone'];
	$education = $_POST['education'];
	$birthday = $_POST['birthday'];


	// Cia tikrinam ar skaicius
	if(is_numeric($_POST['salary'])) {
		$salary = $_POST['salary'];
	}



	$sql = "INSERT INTO darbuotojai(name, surname, gender, phone, education, birthday, salary) VALUES ('$name', '$surname', '$gender', '$phone', '$education', '$birthday', '$salary')";

	$result = $db->query($sql);

	echo mysqli_error($db);

}



var_dump($_POST);