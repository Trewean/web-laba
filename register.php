<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
     <?php require('block\navbar.php'); ?>
    <!-- Форма регистрации -->

    <div class="shit">
        <form action="script\check.php" method="post">
            <label>ФИО</label>
            <input type="text" name="full_name" id="full_name" placeholder="Введите свое полное имя">
            <label>Логин</label>
            <input type="text" name="login" id="login" placeholder="Введите логин">
            <label>Почта</label>
            <input type="email" name="email" id="email" placeholder="Введите адрес почты">
            <label>Пароль</label>
            <input type="password" name="password" id="password" placeholder="Введите пароль">
            <label>Подтверждение пароля</label>
            <input type="password" name="password_confirm" id="password_confirm" placeholder="Подтвердите пароль">
            <button type="submit">Зарегистрироваться</button>
            <p>
                У вас уже есть аккаунт? - <a href="Enter.php">авторизируйтесь</a>!
            </p>
            <?php
                if ($_SESSION['message']) 
                {
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
            ?>
        </form>
    </div>

</body>
</html>