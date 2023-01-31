<?php
include SITE_ROOT . '/srt/database/db.php';
if(!$_SESSION){
	header('location: ' . BASE_URL . 'log.php');
}


$errmsg = [];
$id = '';
$title = '';
$content = '';
$img = '';
$topic = '';

$categ = selectAll('categ');
$posts = selectAll('post');
$postsAdm = selectAllFromPost('post', 'users');

//Код для створення поста
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-post'])){

	if(!empty($_FILES['img']['name'])){
		$imagname = time() . "_" . $_FILES['img']['name'];
		$filetmp = $_FILES['img']['tmp_name'];
		$filetype = $_FILES['img']['type'];
		$way = ROOT_PATH . '\images\img_post\\' . $imagname;
	
		
		if(strpos($filetype, 'image') === false){
			array_push($errmsg, 'Можна загружати лише фото');
		}else{
			$result = move_uploaded_file($filetmp, $way);
			if($result){
				$_POST['img'] = $imagname;
			}else{
				array_push($errmsg, 'Помилка картинка не загрузилась на сервер!');
			}
		}

	}else{
		array_push($errmsg, 'Помилка отримання фото!');
	}
	
	
	$title = trim($_POST['title']);
	$content = trim($_POST['content']);
	$topic = trim($_POST['topic']);
	$publish = isset($_POST['publish']) ? 1 : 0;
	

	if($title === '' || $content === '' || $topic === ''){
		array_push($errmsg, 'Не всі поля заповнені!');
	}elseif(mb_strlen($title, 'UTF8') < 4){
		array_push($errmsg, 'Назва статті має бути більше 100 символів!');
	}else{
		$post = [
		'id_user' => $_SESSION['id'],
	    'title' => $title,
	    'content' => $content,
		'img' => $_POST['img'],
		'status' => $publish,
		'id_topic' => $topic,
		
	    ];
	
	    $post = insert('post', $post);
		$post = selectOne('post', ['id' => $id]);		
		header('location: ' . BASE_URL . 'admin/posts/index.php');
	}
	
}else{
	    $id = '';
		$title = '';
		$content = '';
		$publish = '';
		$topic =  '';
}

//Редагувати пост

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
	$post = selectOne('post', ['id' => $id = $_GET['id']]);
   
	$id = $post['id'];
	$title = $post['title'];
	$content = $post['content'];
	$topic = $post['id_topic'];
	$publish = $post['status'];
	
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-add'])){
	
	$id = $_POST['id'];
	$title = trim($_POST['title']);
	$content = trim($_POST['content']);
	$topic = trim($_POST['topic']);
	$publish = isset($_POST['publish']) ? 1 : 0;
	
    if(!empty($_FILES['img']['name'])){
		$imagname = time() . "_" . $_FILES['img']['name'];
		$filetmp = $_FILES['img']['tmp_name'];
		$filetype = $_FILES['img']['type'];
		$way = ROOT_PATH . '\images\img_post\\' . $imagname;
	
		
		if(strpos($filetype, 'image') === false){
			array_push($errmsg, 'Можна загружати лише фото');
		}else{
			$result = move_uploaded_file($filetmp, $way);
			if($result){
				$_POST['img'] = $imagname;
			}else{
				array_push($errmsg, 'Помилка картинка не загрузилась на сервер!');
			}
		}

	}else{
		array_push($errmsg, 'Помилка отримання фото!');
	}

	if($title === '' || $content === '' || $topic === ''){
		array_push($errmsg, 'Не всі поля заповнені!');
	}elseif(mb_strlen($title, 'UTF8') < 4){
		array_push($errmsg, 'Назва статті має бути більше 100 символів!');
	}else{
		$post = [
		'id_user' => $_SESSION['id'],
	    'title' => $title,
	    'content' => $content,
		'img' => $_POST['img'],
		'status' => $publish,
		'id_topic' => $topic,
		
	    ];
	
	    $post = update('post', $id, $post);		
		header('location: ' . BASE_URL . 'admin/posts/index.php');
	}
	
}else{
		$title = '';
		$content = '';
		$publish = isset($_POST['publish']) ? 1 : 0;;
		$topic =  '';
}

//Керування блогами publish and unpublish

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['public_id'])){
	$id = $_GET['public_id'];
	$publish = $_GET['publish'];
	
	$postid = update('post', $id, ['status' => $publish]);
	
    header('location: ' . BASE_URL . 'admin/posts/index.php');
	exit();
}

//Видалити статтю

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])){
	$id = $_GET['del_id'];
	delete('post', $id);
    header('location: ' . BASE_URL . 'admin/posts/index.php');
	
}