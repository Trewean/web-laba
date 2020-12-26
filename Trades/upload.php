<?php
	include_once('add_function.php'); 
	$name = $_POST['name'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$connect = mysqli_connect('localhost', 'root', '', 'trades');
	$name = mysqli_real_escape_string($connect, $name);
	$price = mysqli_real_escape_string($connect, $price);
	$quantity = mysqli_real_escape_string($connect, $quantity);
//	$image = $_POST['image'];
//	var_dump($name);
//	var_dump($_FILES);
	$image = $_FILES['image']['name'];
	$check = can_upload($_FILES['image']);
//	var_dump($image);
	if($check == "Успех"){
		upload($_FILES['image']);
		mysqli_query($connect, "INSERT INTO `trades`(`name`, `price`, `quantity`, `image`) VALUES ('$name', '$price', '$quantity', '$image') ");
		echo "Данные загружены";
	}
	else{
		echo $check;
	}
 ?>