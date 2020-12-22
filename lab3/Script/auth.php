<?php
	session_start();
	$login = $_POST['login'];
	$password = $_POST['password'];
	$_SESSION['user'] = NULL;
	$_SESSION['cabinet'] = 0;
	/* Экранируем все опасные символы из введенных данных */
	$connect = mysqli_connect('localhost', 'root', '', 'users');
	$login = mysqli_real_escape_string($connect, $login);
	$password = mysqli_real_escape_string($connect, $password);
	$password = md5($password."vrm");
//	$mysql = new mysqli('localhost', 'root', 'root', 'test');

	$result = mysqli_query ($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
	if (mysqli_num_rows($result) > 0)
	{
		$_SESSION['cabinet'] = 1;
		$user = mysqli_fetch_assoc($result);
//		$full_name = $mysqli_query ($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
		$_SESSION['user'] = $user['full_name'];/*$user['full_name'];*/
		header('Location: ../private_cabinet.php');
//		echo "Такой пользователь не найден";
//		exit();
	}
	else{
		$_SESSION['message'] = "Логин или пароль не верны";
		header('Location: ../Enter.php');
	}
//	setcookie('user', $user['full_name'], time + 3600, "/");
//	$mysql -> close();
//	header('Location: index.php');
 ?>