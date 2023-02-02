<?php
//контролер
$page = $_GET['post'];
$email = '';
$comentari = '';
$errmsg = [];
$status = 0;
$coment= [];

//Код для створення комента
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['creatcom'])){
	
	$email = trim($_POST['email']);
	$comment = trim($_POST['comment']);

	if($email === '' || $comment === ''){
		array_push($errmsg, 'Не всі поля заповнені!');
	}elseif(mb_strlen($comment, 'UTF8') < 3){
		array_push($errmsg, 'Комент має бути більше 3 символів!');
	}else{
		$user = selectOne('users', ['email' => $email]);
		if(empty($user)){
			$status = 1;
		}
		
		$comen = [
		'status' => $status,
	    'page' => $page,
	    'email' => $email,
		'comment' => $comment,
		
	    ];
	
	    $comen = insert('comments', $comen);
		$comen = selectAll('comments', ['page' => $page, 'status => 1']);		
	}
	
}else{
	    $email = '';
		$comment = '';
		$comen = selectAll('comments', ['page' => $page, 'status => 1']);		
		
}
