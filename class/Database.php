<?php

/**
 * classe database
 */
class Database {

	function __construct($login, $password, $db_name, $host =  'localhost') {
		$pdo = new PDO("mysql:host=$host;dbname=$db_name", $login, $password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

	}
}