<?php


session_start();


if(isset($_SESSION['name'])){
    echo "Welcome ".$_SESSION['name'];
    ?>
    <form action="change.php" method="POST">
        <h1>change password</h1>
        <input type="password" name="pass" placeholder="password">
        <input type="submit" value="submit">
    </form>
    <p style="color: red;cursor: pointer;" onclick="location.href='delete.php'">delete account</p>
<?php
}else{
    header('location: ./login.php');
}