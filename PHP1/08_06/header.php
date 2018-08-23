<?php

session_start();
setcookie("test_cookie", "test", time() + 3600, '/');


if(isset($_COOKIE['pages_count'])) {

	$value = $_COOKIE['pages_count'] + 1;

	setcookie("pages_count", $value , time() + 3600, "/");
} else {
	setcookie("pages_count", 10, time() + 3600, "/");

}

if(isset($_SESSION['pages_count'])) {
	$_SESSION['pages_count']++;
} else {
	$_SESSION['pages_count'] = 1;
}

if(isset($_SESSION['vist_time'])) {
	// mano vatotojo atejimo laikas jau nustatytas nieko nedarau
} else {
	$_SESSION['vist_time'] = time();
}

if(isset($_GET['clear'])) {
	session_destroy();
}

function timeSpent() {
	$timePassed = time() - $_SESSION['vist_time'];
	$timePassed .= " s.";
	return $timePassed;
}

?>

<link rel="stylesheet" type="text/css" href="boostrap.css">

<div class="container">
<ul class="">
	<li class="nav-item">
		<a href="sesijos.php">Puslapis 1</a>
	</li>

	<li class="nav-item">
		<a href="sesijos2.php">Puslapis 2</a>
	</li>
	<li class="nav-item pull-right">
		<a href="sesijos2.php?clear=true">Isvalyti sesija</a>
	</li>
</ul>

<div class="alert alert-success" role="alert">
	<div class="row">
		<div class="col-md-6">
			Jus perziurejote tiek puslapiu: <?php echo $_SESSION['pages_count']; ?>
		</div>

		<div class="col-md-6">
			Jus praleidote tiek laiko: <?php echo timeSpent(); ?>
		</div>
	</div>
  


</div>


