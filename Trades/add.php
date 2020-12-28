<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../css/add.css">
    <title>Добавление</title>
  </head>
  <body>
 	<div class=shit>
 		<form action="upload.php" method="POST" enctype="multipart/form-data">
 	  		<label>Введите название товара</label>
 	  		<input type="text" name="name" required>
 	  		<label>Введите производителя</label>
 	  		<input type="text" name="manufac" required>
 	  		<label>Введите цену</label>
 	  		<input type="text" name="price" required>
 	 		<label>Введите количество</label>
 	 	 	<input type="text" name="quantity" required>
 	 	 	<label>Добавьте изображение</label>
 	 	 	<input type="file" name="image" required>
 	 	 	<button type="submit">Загрузить</button>
 	 	 </form>
 	</div> 	
  </body>
 </html>