<?php
    session_start();

    if  (!$_SESSION ['user']) {
        header ('Location: index.php' );
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>profile</title>
    <link rel="stylesheet" href="assets/phpstyle.css"> 
</head>
<body>

<!-- ПРОФИЛЬ -->

<form>
    <h2>  
        <?php $_SESSION['user']['login'] ?> 
    </h2>
    <a href="vendor/logout.php" class="exit-btn">Выход</a>
</form>

</body>
</html>