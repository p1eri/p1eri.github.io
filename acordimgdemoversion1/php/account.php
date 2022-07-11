<?php
    session_start();

    if  (!$_SESSION ['user']) {
        header ('Location: ../index.php' );
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/accountstyle.css"> 
</head>
<body>

<!-- ПРОФИЛЬ -->

<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <div class="container-brand">
        <a class="navbar-brand" href="/index.php">acord<span class="colortext">Image</span></a>
      </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <nav class="navbar navbar-light bg">
            <div class="buttons-wrapper">
                <a href="vendor/logout.php"><button class="exit-btn" type="button">Выйти</button></a>
            </div>
    </nav>
    </div>
  </div>
</nav>

<div class="intro">
    <div class="intro-container">
        <p class="main-text"> <?= $_SESSION['user']['login'] ?></p>
        <p class="wi">Work in progress...</p>
    </div>
</div>

</body>
</html>