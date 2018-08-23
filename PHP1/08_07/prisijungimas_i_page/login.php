<?php 
	session_start();
	// Teisingi prisijungimo duomenys
	$logins = [
		"eimantas@kasperiunas.com",
		"kaunas"
	];


	// Tikriname ar forma pateikta
	if(isset($_POST['email']) && isset($_POST['password'])) {
		if($_POST['email'] == $logins[0] && $_POST['password'] == $logins[1]) {
			// Reiskias duomenys suvesti teisingi
			$_SESSION['login'] = true;
			header("Location: http://localhost:83/PHP1/08_07/prisijungimas_i_page/projects.php");
		}

	}
?>


<h1>Prisijungti</h1>
<form method="POST">
	<div>
		<input type="text" required name="email">
	</div>
	<div>
		<input type="password" required name="password">
	</div>
	<input type="submit">
</form>