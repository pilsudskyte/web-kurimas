<?php
session_start();
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$_SESSION['last_url'] = $actual_link;
?>

<h1>Ikelkite failus</h1>
<form method="POST" action="upload.php" enctype="multipart/form-data">
	<input type="file" name="image">
	<input type="submit" >
</form>