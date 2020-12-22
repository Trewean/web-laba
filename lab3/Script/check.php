<?php 
	session_start();

	$full_name = $_POST['full_name'];
	$login = $_POST['login'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password_confirm = $_POST['password_confirm'];

	$connect = mysqli_connect('localhost', 'root', '', 'users');
	/* Экранируем все опасные символы из введенных данных */

	$full_name = mysqli_real_escape_string($connect, $full_name);
	$login = mysqli_real_escape_string($connect, $login);
	$email = mysqli_real_escape_string($connect, $email);
	$password = mysqli_real_escape_string($connect, $password);
	$password_confirm = mysqli_real_escape_string($connect, $password_confirm);
	$password = md5($password."vrm");
	$password_confirm = md5($password_confirm."vrm");

	if (($password != $password_confirm) and $password) 
	{
		$_SESSION['message'] = 'Пароли не совпадают';
		header('Location: ../register.php');
//		exit();
	}
	else {
		mysqli_query($connect, "INSERT INTO `users` ( `full_name`, `login`, `email`, `password`) VALUES ('$full_name', '$login', '$email', '$password')");
		mysqli_query($connect, "INSERT INTO `discont` (`full_name`, `discont`) VALUES ('$full_name', '0%')");
		header('Location: ../Enter.php');
	}
 ?>