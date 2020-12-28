<?php  session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/Product.css">
    <title>Товары</title>
  </head>
  <body>
    <?php require('block\navbar.php') ?>
    <?php require('Script\array.php') ?>
    <?php
    $i = 0; 
    $n = count($arr);
    while($i < $n){ ?>
      <div class="line">
    <?php 
    $k = 4;
    if($n - $i < 4) $k = $n - $i;
    for($j = 0; $j < $k; $j++){
      $trade = $arr[$i];
      ?>
      <div class="card">
        <img src="Trades/<?php echo htmlspecialchars($trade['image'])?>" alt="">
        <h3><?php echo htmlspecialchars($trade['name']) ?></h3>
        <p> Производитель: <?php echo htmlspecialchars($trade['manufac']) ?> </p>
        <p><?php echo htmlspecialchars($trade['price']) ?> р/штука</p>
        <p><?php echo htmlspecialchars($trade['quantity']) ?> на складе</p>
      </div>
      <?php
      $i++;
      }  ?>
    </div>
    <?php } ?>
    <?php if($_SESSION['login'] == "Admin"){ ?>
    <button>
      <a class="button" href="CRUD.php">Изменить товары</a>
    </button>
  <?php } ?>
  </body>
</html>