<?php

$vote = @$_POST['vote'];
$data = file_get_contents('data.json');
$data = json_decode($data, true);

if(isset($vote)){
    if($vote == 'yes'){
        @$data['yes']+=1;
    }elseif($vote=='no'){
        @$data['no']+=1;
    }

    file_put_contents('data.json', json_encode($data));
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vote</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 400px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            text-align: center;
        }

        form {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .result {
            margin-top: 20px;
            text-align: center;
            font-weight: bold;
        }

        .yes {
            background-color: #4CAF50;
            color: white;
        }

        .no {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>PHP是世界上最好的語言</h2>
        <form method="POST">
            <button type="submit" name="vote" value="yes" class="yes">真的!</button>
            <button type="submit" name="vote" value="no" class="no">哪有!</button>
        </form>
        <div class="result">
            <div style="width: 100%; background-color: #f44336; border-radius: 5px;">
                <div style="width: <?= ($data['yes']/($data['yes']+$data['no']))*100   ?>%; height: 20px; background-color: #4caf50; text-align: center; line-height: 20px; color: white; border-radius: 5px 0px 0px 5px;">
                    
                </div>
            </div>
        </div>
    </div>
</body>

</html>