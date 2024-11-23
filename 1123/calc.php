<?php

$num1 = @$_POST['num1'];
$num2 = @$_POST['num2'];
$operation = @$_POST['operation'];

if (isset($num1) && isset($num2) && isset($operation)){
    if ($operation == '+'){
        $res = $num1 + $num2;
    }elseif($operation == '-'){
        $res = $num1 - $num2;
    }elseif($operation == '*'){
        $res = $num1 * $num2;}
    elseif($operation == '/'){
        $res = $num1 / $num2;
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calc</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f0f0f0; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .container { background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); }
        h2 { text-align: center; color: #333; }
        form { display: flex; flex-direction: column; }
        input, select { padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; }
        button { padding: 10px; background-color: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer; }
        .result { font-weight: bold; color: #007BFF; text-align: center; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>calc</h2>
        <form method="POST">
            <input type="number" name="num1" placeholder="num1" required>
            <input type="number" name="num2" placeholder="num2" required>
            <select name="operation" required>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <button type="submit">calc</button>
        </form>
        <div class="result">
            <?php if (isset($res)) { echo "Result: $res"; } ?>
        </div>
    </div>
</body>
</html>
