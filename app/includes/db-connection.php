<?php
const MARIADB_HOSTNAME = "db";
const MARIADB_DATABASE = "todo_db";
const MARIADB_USERNAME = "todo_user";
const MARIADB_PASSWORD = "todo_password";

$dsn = sprintf(
	"mysql:host=%s;dbname=%s;charset=utf8mb4",
	MARIADB_HOSTNAME,
	MARIADB_DATABASE
);

try{
	$pdo = new PDO($dsn, MARIADB_USERNAME, MARIADB_PASSWORD, [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
	]);
} catch (PDOException $ex){
	echo sprintf(
		"There was a problem trying to connect to the DB: error %s <br> %d",
		$ex->getMessage(),
		$ex->getTraceAsString(),
	);
}
?>
