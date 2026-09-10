<?php
    $temp = rand(-155, 155); /*0*/;
    $x    = $temp / 10;
    if ($x < 0) {
    $answer = "Мороз!";
    $color  = "aqua";
    } elseif ($x == 0) {
    $answer = "Не тепло, не мороз..";
    $color  = "grey";
    } else {
    $answer = "Тепло!";
    $color  = "rgb(239, 88, 83);";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;

        }
        .box{
            border: 1px solid;
            display: block;
            margin-top: 30px;
            border-radius: 30%;
            width: 250px;
            height: 250px;
            text-align: center;
            transition: transform 0.3s ease;
            
        }
        .box:hover {
            transform: scale(1.2);
        }
    </style>
</head>
<body>
    <div></div>
    <div class="box" style = "background-color: <?php echo $color ?>;">
        <h1>Температура</h1>
        <h2><?php echo $x ?> °С</h2>
        <h3><?php echo $answer ?></h3>
        <button onclick="location.reload()"> Оновити дані</button>
    </div>
    <br>
     
</body>
</html>
