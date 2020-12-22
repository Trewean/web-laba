 <?php 
 session_start(); 
 $user = $_SESSION['user'];
 $connect = mysqli_connect('localhost', 'root', '', 'users');
 $result1 = mysqli_query($connect, "SELECT * FROM `discont` WHERE `user` = '$user'");
 $result2 = mysqli_query($connect, "SELECT * FROM `cargo` WHERE `user` = '$user'");
 $result3 = mysqli_query($connect, "SELECT * FROM `cargo` WHERE `user` = '$user'");
 ?>
 <html lang="ru">
  <head>
    <link rel="stylesheet" href="css/cabinet.css">  
    <title>Личный кабинет</title>
  </head>
  <body>
  	<?php if($_SESSION['cabinet'] == 0){
  		header('Location: ../site.php');
  	} 
  	else {
      $row = mysqli_fetch_row($result3);
      ?>
    <?php require('block\navbar.php') ?>
        <div class="inform">
          <div class="cargo">
            <h3>Ваши грузы:</h3><br>
            <h4><?php  if($row == NULL){ echo "Тут пока ничего нет";?></h4>
            <a href="Trades.php"><button type="button" class="btn btn-primary">Заказать</button></a>
              <?php } else{?>
                <?php  while($pow2 = mysqli_fetch_assoc($result2)){?>
                  <p>
                    <h4>Груз из: 
                      <span class="in">
                        <?php             
                          echo htmlspecialchars($pow2['cargo']);
                         ?></span>
                    Дата заказа: <span class="in">
                      <?php echo htmlspecialchars($pow2['time']); ?>
                      </span></h4>  
                  </p>
              <?php }}} ?>
          </div>
          <div class="discont">
            <h3>Ваша скидка равна :
              <span class="in">
                <?php 
                  $pow1 = mysqli_fetch_assoc($result1);
                  echo htmlspecialchars($pow1['discont']);
                ?></span>
            </h3>
          </div>
        </div>
              <button >
                  <a class="button" href="script/exit.php">Выход</a>
              </button>  
  </body>
</html>