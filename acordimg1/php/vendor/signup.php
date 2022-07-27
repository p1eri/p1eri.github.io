<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");

    if(!$check_user || mysqli_num_rows($check_user) == 0) {
        $_SESSION['message'] = "Неверный логин или пароль";
        header('Location: ../index.php');
    } else {
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['login']
        ];

        header('Location: ../account.php');
    }
?>
