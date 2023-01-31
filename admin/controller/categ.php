<?php
include SITE_ROOT . '/srt/database/db.php';


$errmsg = '';
$id = '';
$name = '';
$description = '';
$categ = selectAll('categ');

//Код для створення категорій
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-cat'])){
	
	$name = trim($_POST['name']);
	$description = trim($_POST['description']);
	
	if($name === '' || $description === ''){
		$errmsg = 'Не всі поля заповнені!';
	}elseif(mb_strlen($name, 'UTF8') < 2){
		$errmsg = 'Категорія повина бути більшим ніж два символи!';
	}else{
		$existence = selectOne('categ', ['name' => $name]);
		if(!empty($existence)){
			$errmsg = 'Така категорія в базі вже створена!';
		}else{
		$topic = [
	    'name' => $name,
	    'description' => $description
	    ];
	    $id = insert('categ', $topic);
		$topic = selectOne('categ', ['id' => $id]);		
		header('location: ' . BASE_URL . 'admin/category/index.php');
	}
}
}else{
	$name = '';
	$description = '';
}

//Редагувати категорію

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
	
	$id = $_GET['id'];
	$topic = selectOne('categ', ['id' => $id]);
	$id = $topic['id'];
	$name = $topic['name'];
	$description = $topic['description'];
	
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-edit'])){
	$name = trim($_POST['name']);
	$description = trim($_POST['description']);
	
	if($name === '' || $description === ''){
		$errmsg = 'Не всі поля заповнені!';
	}elseif(mb_strlen($name, 'UTF8') < 2){
		$errmsg = 'Категорія повина бути більшим ніж два символи!';
	}else{
		$topic = [
	    'name' => $name,
	    'description' => $description
	    ];
	    $id = $_POST['id'];
		$topic_id = update('categ', $id, $topic);
		header('location: ' . BASE_URL . 'admin/category/index.php');
	}
  }


//Видалити категорію

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])){
	$id = $_GET['delete_id'];
	delete('categ', $id);
    header('location: ' . BASE_URL . 'admin/category/index.php');
	
}