<?php
session_start();
$id = $_GET['varname'];
$_SESSION['update'] = $id;
var_dump($_SESSION['update']);
?>			
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../css/add.css">
    <title>Изменение</title>
  </head>
  <body>
 	<div class=shit>
 		<form action="update1.php" method="POST" enctype="multipart/form-data">
 	  		<label>Введите название товара</label>
 	  		<input type="text" name="name" required >
 	  		<label>Введите производителя</label>
 	  		<input type="text" name="manufac" required >
 	  		<label>Введите цену</label>
 	  		<input type="text" name="price" required >
 	 		<label>Введите количество</label>
 	 	 	<input type="text" name="quantity" required >
 	 	 	<label>Добавьте изображение</label>
 	 	 	<input type="file" name="image" >
 	 	 	<button type="submit">Изменить</button>
 	 	 </form>
 	</div> 	
  </body>
 </html>