<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/CRUD.css">
    <title>Таблица 2</title>
  </head>
  <body>
  	<?php require('block/navbar.php') ?>
  	<?php 
  	$connect = mysqli_connect('localhost', 'root', '', 'trades');
	$sql1 = mysqli_query($connect, "SELECT * FROM `manufac`");
	$arr = array();
	while($mass = mysqli_fetch_assoc($sql1)){
		$arr[] = $mass;
	}
  	 ?>
  	 		<a href="CRUD.php">Посмотреть товары</a>
  	<?php 
  	$i = 0;
  	$n = count($arr); ?>
  	<table>
  		<tr>
  			<th>ID компании</th>
  		  	<th>Название</th>
  		</tr>
  		<?php while($i < $n){ 
  			$tab = $arr[$i];?>
  			<tr>
  				<th> <?php echo htmlspecialchars($tab['id']) ?> </th>
  				<th><?php echo htmlspecialchars($tab['name']) ?></th>
  			</tr>
  		<?php
  		$i++; 
  	} ?>
  	</table>
  </body>
</html>