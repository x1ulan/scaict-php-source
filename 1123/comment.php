<?php

$name = @$_POST['name'];
$msg = @$_POST['message'];
$data = file_get_contents('data.json');
$data = json_decode($data, true);


if(isset($name) && isset($msg)){
    $data[] = [
        'name'=>$name,
        'msg'=>$msg
    ];

    file_put_contents('data.json', json_encode($data));
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comment</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f9f9f9; margin: 0; padding: 20px; }
        .container { max-width: 600px; margin: auto; background: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h2 { color: #333; }
        form { display: flex; flex-direction: column; }
        input, textarea { padding: 10px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 5px; }
        button { padding: 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer; }
        .message { margin: 15px 0; padding: 10px; background: #f1f1f1; border-radius: 5px; }
        .name { font-weight: bold; color: #4CAF50; }
    </style>
</head>
<body>
    <div class="container">
        <h2>comment</h2>
        <form method="POST">
            <input type="text" name="name" placeholder="name" required>
            <textarea name="message" placeholder="context" rows="4" required></textarea>
            <button type="submit">submit</button>
        </form>
        <div id="messages">
            <?php
            foreach($data as $msgs){
                $name = htmlentities($msgs['name']);
                $msg = htmlentities ($msgs['msg']);
                echo "<div class='message'><span class='name'>$name</span><p>$msg</p></div>";
            }
            ?>
        </div>
    </div>
</body>
</html>
