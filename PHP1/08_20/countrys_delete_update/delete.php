<?php
include('config.php');

if (isset($_GET['id']) && is_numeric($_GET['id']))
{
$id = $_GET['id'];

$result = $db->query("DELETE FROM city WHERE id=$id")
or die(mysqli_error());

header("Location: view.php");
}
else

{
header("Location: view.php");
}
?>