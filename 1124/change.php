<?php

session_start();

if($_POST['pass'] && $_SESSION['name']){
    require 'config.php';
    $sql = 'UPDATE users SET pass=? WHERE name=?';

    $s = $conn -> prepare($sql);
    $s -> bind_param('ss', $_POST['pass'], $_SESSION['name']);
    $s -> execute();
    $s = $s -> get_result();
    header('location: ./login.php');
}