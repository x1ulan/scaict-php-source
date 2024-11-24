<?php

session_start();

if(isset($_POST['name']) && isset($_POST['pass'])){
    require 'config.php';

    $sql = 'SELECT * FROM users WHERE name=? AND pass=?';
    
    $s = $conn -> prepare($sql);
    $s -> bind_param('ss', $_POST['name'], $_POST['pass']);
    $s -> execute();
    $s = $s -> get_result();
    if($s -> num_rows){
        $d = $s -> fetch_all();
        $_SESSION['name'] = $d[0][1];
        header('location: ./dashboard.php');
        exit();
    }
    die('username or password error');
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #e9e9e9; }
        .login-container { width: 300px; padding: 20px; background: #fff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); }
        h2 { text-align: center; color: #333; }
        form { display: flex; flex-direction: column; }
        input { padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; }
        button { padding: 10px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>login</h2>
        <form method="POST">
            <input type="text" name="name" placeholder="username" required>
            <input type="password" name="pass" placeholder="password" required>
            <button type="submit">login</button>
        </form>
        <p style="cursor: pointer" onclick="location.href='./register.php'">register</p>
    </div>
</body>
</html>