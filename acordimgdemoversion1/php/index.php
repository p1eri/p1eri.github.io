<?php
    session_start();

    if(isset($_SESSION['user'])) {
        header('Location: account.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sign-in</title>
    <link rel="stylesheet" href="/assets/phpstyle.css"> 
</head>
<body>

<!-- АВТОРИЗАЦИЯ -->

<form class="window" action="vendor/signup.php" method="post">
    <label class="text">Логин</label>
    <input class="input" name="login" type="text" placeholder="Введите логин">
    <label class="text">Пароль</label>
    <input class="input" name="password" type="password" placeholder="Введите пароль">
    <input value="Войти" type="submit" class="sign-in-but">
    <p class="under-text"> 
        До сих пор нет аккаунта? - <a href="register.php" class="no-acc">зарегистрируйтесь</a>
    </p>
    <?php
    if(isset($_SESSION['message'])) {
        echo '<p class="msg">' . $_SESSION['message'] . '</p>';
    }
    unset($_SESSION['message']);
    ?>
</form>


    
</body>
</html>