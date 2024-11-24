<?php

session_start();

if($_SESSION['name']){
    require 'config.php';
    $sql = 'DELETE FROM users WHERE name=?';

    $s = $conn -> prepare($sql);
    $s -> bind_param('s', $_SESSION['name']);
    $s -> execute();
    $s = $s -> get_result();
    session_destroy();
    header('location: ./login.php');
}