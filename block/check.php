<?php 
	session_start();
	$adress = $_POST['adress'];
	$password = $_POST['password'];
	$connect = mysqli_connect('localhost', 'root', '', 'users');
	$result = mysqli_query($connect, "SELECT * FROM `users` WHERE `adress`='$adress' AND `password`='$password'");
 	$_SESSION['adress'] = $adress;
 	$_SESSION['message'] = 0;
 	$_SESSION['cabinet'] = 0;
 	$_SESSION['name'] = NULL;
 	if(mysqli_num_rows($result) > 0){
 		//Переход в личный кабинет.html
 		//	$_COOKIE['auth'] = 1;
 		$_SESSION['name'] = $adress;
 		$_SESSION['cabinet'] = 1;
 	//	setcookie('auth', "1", time() + 3600, "/");
 		header('Location: /private_cabinet.php');
 	}
 	else {
 		$_SESSION['message'] = 1;
 	//	header('Location: ../site.html');
 	//echo "Неверный логин или пароль";
 	header('Location: ../site.php');
 	}
 ?>