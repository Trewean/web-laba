<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="css/register.css">  
</head>
<body>

    <!-- Форма регистрации -->
    <?php require('block\navbar.php'); ?>
    <?php if($_SESSION['user'] == NULL){ ?>
<div class="shit">        
    <form  action="script\auth.php" method="post">
            <label>Логин</label>
            <input type="text" name="login" id="login" placeholder="Введите логин">
            <label>Пароль</label>
            <input type="password" name="password" id="password" placeholder="Введите пароль">
            <button type="submit">Войти</button>
            <p>
                    У вас нет аккаунт? - <a href="register.php">Зарегистрироваться</a>
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
<?php } else{ 
    header('Location: ../private_cabinet.php');
} ?>
</body>
</html>