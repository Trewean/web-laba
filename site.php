<?php 
session_start();
?>
<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Магазин пиломатериалов</title>
    <style>
      body{
        background: url(glavnaya.jpg)
        }
    </style>
  </head>
  <body>
    <?php require('block\header.php'); ?>
    <div class="cointainer-fluid">
      <div class="p-3 mb-2 bg-dark text-white">
        <div class="cointainer">
              <div class="row text-center">
                <div class="col">
                  <h1>О компании</h1>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div class="cointainer">
      <div class="p-3 mb-2 bg-dark text-white">
        <div class="cointainer">
              <div class="row text-center">
                <div class="col-md-5">
                  <?php if($_SESSION['name'] == NULL){ ?>
                  <h2>Оформление заказа</h2>
                  <form action="check.php" method="post">
                  <div>
                    <h3>Введите почту</h3>
                  <input class="form-control" placeholder="Почта" type="text" name="adress" value="">
                  </div>
                  <div>
                    <h3>Введите пароль</h3>
                  <input class="form-control"  placeholder="Пароль" type="password" name="password" value="">
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                  </div>
                 <?php
                 if($_SESSION['message']){
                  ?>
                  <h4>Неверный адрес или пароль</h4>
                  <?php
                  $_SESSION['message'] = 0;
                  }
                  ?>
                </form>
              </div>
              <?php } else{ ?>
                  <div class="col-md-7">
                    <h2>Добро пожаловать  <?php echo $_SESSION['name']; ?></h2>
                    <a href="private_cabinet.php"><button type="button" class="btn btn-primary">В личный кабинет</button></a>
                    <a href="block\exit.php"> 
                      <button type="button" class="btn btn-primary">Выйти</button>
                     </a>

                  </div>
              <?php } 
               ?>
                  <div class="col-md-7">
                  <h3>Наша производственная компания уже более 30 лет представлена на рынке деловой древесины России и стран СНГ. Уверенно зарекомендовав себя в качестве надёжного партнера, поставляет пиломатериалы лиственных и хвойных пород.

Вся продукция компании производится на современном оборудовании. Используется только высококачественное сырьё, с соблюдением всех технологических норм и этапов обработки. Внушительный опыт в сфере производства и заготовки древесины, позволяет производить, сохранять и поставлять качественный продукт, удовлетворяющий требованиям ГОСТ.

Отгрузка ваших заказов производится автомобильным и железнодорожным транспортом. Благодаря оптимизации бизнес-процессов, мы предлагаем конкурентно низкие цены, удерживая одни из лидирующих позиций на рынке лесозаготовок.</h3>
                  </div>
              </div>
            </div>
          </div>
    </div>
       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>