<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class MySQL {

	private static $result = "rez";

	public static function connect() {
		echo "bandau prisijungti";
	}

	public static function getResult() {
		return self::$result;
		
	}
}


// Cia baigiasi klases aprasymas

MySQL::connect();
echo MySQL::getResult();