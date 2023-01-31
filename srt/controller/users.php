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

//Код для форми реєстрації
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){
	
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
		$post = [
	    'admin' => $admin,
	    'username' => $login,
	    'email' => $email,
	    'password' => $pass
	    ];
	    $id = insert('users', $post);
		$user = selectOne('users', ['id' => $id]);
		usersout($user);		
	}
}
}else{
	$login = '';
	$email = '';
}

//Код для форми авторизації
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])){

$email = trim($_POST['mail']);
$pass = trim($_POST['password']);

if($email === '' || $pass === ''){
	array_push($errmsg, 'Не всі поля заповнені!');
   }else{
   $existence = selectOne('users', ['email' => $email]);
	if($existence && password_verify($pass, $existence['password'])){
		usersout($existence);
	}else{
		array_push($errmsg, 'Пошта або пароль введені не правельно!');
	}
  }

}else{
	$email = '';  
  }
	


