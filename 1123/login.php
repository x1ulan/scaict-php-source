<?php

$username = @$_POST['username'];
$password = @$_POST['password'];


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($username) && isset($password)){
        if($username == 'xiulan' && $password == '123456'){
            $msg = '登入成功';
        }else{
            $msg = '登入失敗';
        }
    }
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
            <input type="text" name="username" placeholder="username" required>
            <input type="password" name="password" placeholder="password" required>
            <button type="submit">login</button>
        </form>
        <?php if(isset($msg)) { ?> 
        <p style="color: red;"><?= $msg ?></p>
        <?php } ?>
    </div>
</body>
</html>