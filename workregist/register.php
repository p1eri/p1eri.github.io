<?php
    session_start();

    if  ($_SESSION ['user']) {
        header ('Location: accoint.php' );
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sign-up</title>
    <link rel="stylesheet" href="assets/phpstyle.css"> 
</head>
<body>

<!--РЕГИСТРАЦИЯ -->

<form class="window" action="vendor/signin.php" method="post">
    <label class="text">Логин</label>
    <input class="input" type="text" name="login" placeholder = "Введите логин">
    <label class="text" >Пароль</label>
    <input class="input" type="password" name="password" placeholder = "Введите пароль">
    <label class="text">Подтвердите пароль</label>
    <input class="input" type="password" name="password_confirm" placeholder = "Подтвердите пароль">
    <button class="sign-in-but">Зарегистрироваться</button>
    <p class="under-text"> 
        Уже есть аккаунт? - <a href="index.php" class="no-acc">войти</a>
    </p>
    <?php
    if ($_SESSION['message']) {
        echo '<p class="msg">' . $_SESSION['message'] . '</p>';
    }
    unset($_SESSION['message']);
    ?>
</form>

</body>
</html>