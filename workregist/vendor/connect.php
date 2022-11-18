<?php
    $connect = mysqli_connect('localhost', 'root', 'root', 'acordimagedb');

    if (!$connect) {
        die ('Error connection to DataBase');
    }
?>