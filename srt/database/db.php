<?php

require 'connect.php';
 
 function pnt($value){
	 echo '<pre>';
	 print_r ($value);
	 echo '</pre>';
 }
 
 function checkError($query){
	$errInfo = $query->errorInfo();
	if ($errInfo[0] !== PDO::ERR_NONE){
		echo $errInfo[2];
		exit();
	}
	return true;
 }
 function selectAll($table){
	global $pdo;
	$sql = "SELECT * FROM $table";
	$query = $pdo->prepare($sql);
	$query->execute();
	
	return $query->fetchAll();
   
}

pnt(selectAll(table:"users"));
