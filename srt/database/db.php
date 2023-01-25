<?php

session_start();
require 'connect.php';
 
 function pnt($value){
	 echo '<pre>';
	 print_r ($value);
	 echo '</pre>';
 }
 // Перевірка до бази данних
 function dbCheckError($query){
	$errInfo = $query->errorInfo();
	if ($errInfo[0] !== PDO::ERR_NONE){
		echo $errInfo[2];
		exit();
	}
	return true;
 }
 // Запит на отримання данних з одної таблиці
 function selectAll($table, $params = []){
	global $pdo;
	$sql = "SELECT * FROM $table";
	
	if(!empty($params)){
		$i = 0;
		foreach ($params as $key => $value){
		  if(!is_numeric($value)){
			  $value = "'".$value."'";
		    }
			if($i === 0){
				$sql = $sql . " WHERE $key=$value";
			}else{
				$sql = $sql . " AND $key=$value";
			}
			$i++;
		}
	}
	
	$query = $pdo->prepare($sql);
	$query->execute();
	dbCheckError($query);
	return $query->fetchAll();

}

// Запит на отримання одного рядка з вибраної таблиці
 
 function selectOne($table, $params = []){
	global $pdo;
	$sql = "SELECT * FROM $table";
	
	if(!empty($params)){
		$i = 0;
		     foreach ($params as $key => $value){
		       if(!is_numeric($value)){
			   $value = "'".$value."'";
		     }
			    if($i === 0){
				$sql = $sql . " WHERE $key=$value";
			    }else{
				$sql = $sql . " AND $key=$value";
			  }
			$i++;
		}
	}
	$query = $pdo->prepare($sql);
	$query->execute();
	dbCheckError($query);
	return $query->fetch();

 }



// Запис в таблицю бази данних

function insert($table, $params){
	global $pdo;
	$i = 0;
	$coll = '';
	$mask = '';
	foreach ($params as $key => $value){
		if ($i === 0){
			$coll = $coll . "$key";
		    $mask = $mask . "'" ."$value"."'";
		}else{
		$coll = $coll . ", $key";
		$mask = $mask . ", '" . "$value"."'";
		}
		$i++;
	}
   
   $sql = "INSERT INTO $table ($coll) VALUES ($mask)";
	$query = $pdo->prepare($sql);
	$query->execute();
	dbCheckError($query);
	return $pdo->lastInsertId();
}

// Оновлення рядка в таблиці

function update($table, $id, $params){
	global $pdo;
	$i = 0;
	$str = '';
	foreach ($params as $key => $value){
		if ($i === 0){
		    $str = $str . $key . " = '" . $value ."'";
		}else{
		$str = $str .", " . $key . " = '" . $value ."'";
		}
		$i++;
	}

   $sql = "UPDATE $table SET $str WHERE id = $id";
	$query = $pdo->prepare($sql);
	$query->execute();
	dbCheckError($query);
}


// Видалення рядка в таблиці

function delete($table, $id){
	global $pdo;
   $sql = "DELETE FROM $table WHERE id = $id ";
	$query = $pdo->prepare($sql);
	$query->execute();
	dbCheckError($query);
}
