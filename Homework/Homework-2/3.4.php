<?php
    $temp = rand(360, 410); /*0*/;
    $x    = $temp / 10;
    if ($x <= 37) {
    $answer = "Здоровий!";
    $color  = "green";
    $foto   = "/images/imokay.png";
    } elseif ($x > 37 && $x < 37.5) {
    $answer = "На межі хвороби.";
    $color  = "yellow";
    $foto   = "/images/feelworse.png";
    } else {
    $answer = "Хворий!";
    $color  = "red";
    $foto   = "/images/imill.png";
    }

    $names    = ["Антон", "Максим", "Ірина", "Артем", "Євдокія"];
    $surnames = ["Жиліх", "Повік", "Кукі", "Уков", "Ментос"];
    $randname = rand(0, 4);
    $randsur  = rand(0, 4);
    $user     = "$names[$randname] $surnames[$randsur]";
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
            border-radius: 10%;
            width: 350px;
            height: 250px;
            text-align: center;
            transition: transform 0.3s ease;
            m
        }
        .box:hover {
            transform: scale(1.2);
        }
    </style>
</head>
<body>
    <div></div>
    <div class="box" style = "background-color: <?php echo $color ?>;">
        <h1>Дані про пацієнта</h1>
        <h2>Ім'я - <?php echo $user ?></h2>
        <h3><?php echo $answer ?></h3>
        <h3>  <?php echo "Температура - $x °С" ?></h3>
        <button onclick="location.reload()">Перейти до іншого пацієнта</button>
    </div>
    <br>

</body>
</html>
