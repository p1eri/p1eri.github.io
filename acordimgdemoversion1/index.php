<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acordImage.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <div class="container-brand">
        <a class="navbar-brand" href="index.php">acord<span class="colortext">Image</span></a>
      </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <nav class="navbar navbar-light bg">
            <div class="buttons-wrapper">
                <?php
                if(isset($_SESSION['user'])) {
                    echo "<a href='php/account.php' class='to-lk'>&nbsp;&nbsp;&nbsp;" . $_SESSION ['user']['login'] . "</a>";
                } else {
                    echo "
                    <a href='php/index.php'><button class='sign-in-btn' type='button'>Войти</button></a>
                    <a href='php/register.php'><button class='sign-up-btn' type='button'>Зарегистрироваться</button></a>
                    ";
                }
                ?>
            </div>
    </nav>
    </div>
  </div>
</nav>

<div class="intro">
    <div class="intro-container">
    <span class="wi">work in progress</span>
        <h1 class="main-text">
            Загружайте и делитесь изображениями <br>
            Потрясающе быстро
        </h1>
        <p class="intro-text-under">
            Переместите картинку в любое место окна <br>
            После загрузки изображения, вы получите <br>
            прямые ссылки, BB-коды и миниатюры
        </p>
        <button class="download-btn">Загрузить</button>
    </div>
</div>

<div class="footer">
    <div class="footer-contacts">
        <a href="mailto:quickjamjob@gmail.com"><img src="img/gmail.svg" alt="#"></a>
        <a href="https://t.me/pavlovdeveloper"><img src="img/telegram.svg" alt="#"></a>
        <a href="https://vk.com/passh_1"><img src="img/vkontacte.svg" alt="#"></a>
    </div>
</div>

</body>
</html>