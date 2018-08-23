<?php

$servername = 'localhost';
$dbname = 'salys';
$username = 'root';
$password = 'mysql';

$db = new mysqli('localhost', $username, $password, $dbname);

$db->set_charset("utf8");
?>
