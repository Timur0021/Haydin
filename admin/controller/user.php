<?php

include SITE_ROOT . '/srt/database/db.php';

$errmsg = [];
function usersout($user){
$_SESSION['id'] = $user['id'];
$_SESSION['login'] = $user['username'];
$_SESSION['admin'] = $user['admin'];
 if ($_SESSION['admin']){
	 header('location: ' . BASE_URL . "admin/posts/index.php");
 }else{
	 header('location: ' . BASE_URL);
    }
}

$users = selectAll('users');
//Код для реєстрації користувачів з адмінкі
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create-user'])){
	
	$admin = 0;
	$login = trim($_POST['login']);
	$email = trim($_POST['mail']);
	$passF = trim($_POST['pass-first']);
	$passS = trim($_POST['pass-second']);
	
	if($login === '' || $email === '' || $passF === ''){
		array_push($errmsg, 'Не всі поля заповнені!');
	}elseif(mb_strlen($login, 'UTF8') < 2){
		array_push($errmsg, 'Логін повинен бути більшим ніж два символи!');
	}elseif($passF !== $passS){
		array_push($errmsg, 'Паролі в обох полях повинні бути однаковими!');
	}else{
		$existence = selectOne('users', ['email' => $email]);
		if(!empty($existence)){
			array_push($errmsg, 'Користувач з такою поштою вже зареєстрований!');
		}else{
		$pass = password_hash($passF, PASSWORD_DEFAULT);
		if(isset($_POST['admin'])){
			$admin = 1;
		}
		$user = [
	    'admin' => $admin,
	    'username' => $login,
	    'email' => $email,
	    'password' => $pass
	    ];
	    $id = insert('users', $user);
		$user = selectOne('users', ['id' => $id]);
		usersout($user);		
	}
}
}else{
	$login = '';
	$email = '';
}

//////////
//Редагування користувачів з адмін панелі

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['edit_id'])){
	$user = selectOne('users', ['id' => $id = $_GET['edit_id']]);
 
	$id = $user['id'];
	$admin = $user['admin'];
	$username = $user['username'];
	$email = $user['email'];
	
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update-user'])){
	
	
	$id = $_POST['id'];
	$email = trim($_POST['email']);
	$login = trim($_POST['login']);
	$passF = trim($_POST['pass-first']);
	$passS = trim($_POST['pass-second']);
	$admin = isset($_POST['admin']) ? 1 : 0;

	if($mail === '' || $login === ''){
		array_push($errmsg, 'Не всі поля заповнені!');
	}elseif(mb_strlen($login, 'UTF8') < 4){
		array_push($errmsg, 'Логін має бути більше 4 символів!');
	}elseif($passF !== $passS){
		array_push($errmsg, 'Паролі в обох полях повинні бути однаковими!');
	}else{
		$pass = password_hash($passF, PASSWORD_DEFAULT);
		if(isset($_POST['admin'])) $admin = 1;
		$user = [
		'admin' => $admin,
	    'username' => $login,
		'email' => $email,
		'password' => $pass
		
	    ];
	
	    $user = update('users', $id, $user);		
		header('location: ' . BASE_URL . 'admin/users/index.php');
	}
	
}else{
		$login = '';
		
}
//////////
//Видалити користувачів 

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])){
	$id = $_GET['delete_id'];
	delete('users', $id);
    header('location: ' . BASE_URL . 'admin/users/index.php');
	
}