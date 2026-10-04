<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }
        .box {
            border: 1px solid;
            display: block;
            margin-top: 30px;
            border-radius: 10% ;
            text-align: center;
            width:  ​55px;
            height:  ​50px;
            background-color: rgb(122, 244, 146);
            transition: transform0.3s ease;
        }
         .box:hover {
    transform: scale(1.2);
}
    </style>
</head>
<body>
    <?php
        $count = rand(10, 12);
        echo "<h1>Вам випало $count змінних!</h1><br>";
        echo "<div>";
        for ($i = 1; $i <= $count; $i++) {
            ${"x" . $i} = $i;
            echo "<div class='box'>x$i = $i </div>";
        }
        echo "</div>";
    ?>
</body>
</html>