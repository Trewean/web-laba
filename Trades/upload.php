<?php
	include_once('add_function.php'); 
	$name = $_POST['name'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$manufac = $_POST['manufac'];
	$connect = mysqli_connect('localhost', 'root', '', 'trades');
	$name = mysqli_real_escape_string($connect, $name);
	$price = mysqli_real_escape_string($connect, $price);
	$quantity = mysqli_real_escape_string($connect, $quantity);
	$manufac = mysqli_real_escape_string($connect, $manufac);
	if(mysqli_num_rows(mysqli_query($connect, "SELECT * FROM `manufac` WHERE `name` = '$manufac' ")) == 0){
		mysqli_query($connect, "INSERT INTO `manufac` (`name`) VALUES ('$manufac') ");
	}

//	$image = $_POST['image'];
//	var_dump($name);
//	var_dump($_FILES);
	$image = $_FILES['image']['name'];
	$check = can_upload($_FILES['image']);
//	var_dump($image);
	if($check == "Успех"){
		$img = upload($_FILES['image']);
		mysqli_query($connect, "INSERT INTO `trades`(`name`, `price`, `quantity`, `image`, `manufac`) VALUES ('$name', '$price', '$quantity', '$img', '$manufac') ");
		echo "Данные загружены";
	}
	else{
		echo $check;
	}
 ?>