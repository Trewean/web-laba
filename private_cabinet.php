 <?php 
 session_start(); 
 $adress = $_SESSION['adress'];
 $connect = mysqli_connect('localhost', 'root', '', 'users');
 $result1 = mysqli_query($connect, "SELECT * FROM `discont` WHERE `adress` = '$adress'");
 $result2 = mysqli_query($connect, "SELECT * FROM `cargo` WHERE `adress` = '$adress'");
 $result3 = mysqli_query($connect, "SELECT * FROM `cargo` WHERE `adress` = '$adress'");
 ?>
 <html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Личный кабинет</title>
    <style>
      body{
        background: url(glavnaya.jpg)
        }
    </style>
  </head>
  <body>
  	<?php if($_SESSION['cabinet'] == 0){
  		header('Location: ../site.php');
  	} 
  	else {?>
    <?php require('block\header.php') ?>
    <div class="cointainer">
      	<div class="p-3 mb-2 bg-dark text-white">
        	<div class="cointainer">
              <div class="row text-center">
                <div class="col-md-7">
                  	<h4>Ваша скидка равна :
                  	<?php 
                  	$pow1 = mysqli_fetch_assoc($result1);
                  //	$pow2 = mysqli_fetch_assoc($result2);
                  	$row = mysqli_fetch_row($result3);
                  //	print_r($result3);
                  	//echo($result);
                  	//print_r($row);
                  	echo $pow1['discont'];
                  	 ?>
                  	 </h4>
                <div class="col-md-7">
                	<h4>Ваши грузы:</h4><br>
                	<h4><?php  if($row == NULL){ echo "Тут пока ничего нет";?></h4>
                	<a href="Trades.php"><button type="button" class="btn btn-primary">Заказать</button></a>
                <?php } ?>
                	<?php  while($pow2 = mysqli_fetch_assoc($result2)){?>
                	<p><h5>Груз из: <?php 
                	    
                	    echo $pow2['cargo'];
                	    ?>
                	    Дата заказа: <?php echo $pow2['time']; ?></h5>	
                	 </p>
                	<?php } ?>
                </div>
              </div>
            </div>
          </div>
    	</div>
	</div>
<?php } ?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>