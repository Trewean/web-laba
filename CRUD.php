<?php session_start();
?> 
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/CRUD.css">
    <title>Таблица</title>
  </head>
  <body>
  	<?php require('block\navbar.php') ?>
  	<?php require('Script\array.php') ?>
  	<?php if($_SESSION['cabinet'] == 0)
  	echo "Для изменения товаров требуется авторизация";
  	else { 
  		$i = 0;
  		$n = count($arr);
  	?>
  	<table>
  		<tr>
  			<th>ID</th>
  			<th>Название товара</th>
  			<th>Цена</th>
  			<th>Количество</th>
  			<th>Изображение</th>
  		</tr>
  		<?php while ($i < $n) { 
  			$tab = $arr[$i]; ?>
  			<tr>
  				<th><?php echo htmlspecialchars($tab['id']); ?></th>
  				<th><?php echo htmlspecialchars($tab['name']); ?></th>
  				<th><?php echo htmlspecialchars($tab['price']); ?></th>
  				<th><?php echo htmlspecialchars($tab['quantity']); ?></th>
  				<th><?php echo htmlspecialchars($tab['image']); ?></th>
  				<th><a href="change.php">Изменить товар</a></th>
  				<th><a href="delete.php">Удалить товар</a></th>
  			</tr>
  		<?php $i++; 
  		} ?>
  	</table>
  <?php } ?>
  <button><a class="button" href="Trades/add.php">Добавить</a></button>
  </body>
</html>  