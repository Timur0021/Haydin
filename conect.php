<?php

$driver = 'mysql';
$host = 'localhost';
$db_name = 'Haydin';
$db_user = 'root';
$db_pass = 'mysql';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
	$pdo = new PDO (
	dsn:"$driver:host=$host;dbname=$dbname;charset=$charset",
	$db_user, $db_pass, $options
	);
}
catch (PDOException $i){
	die ("Помилка підключення до бази данних");
}