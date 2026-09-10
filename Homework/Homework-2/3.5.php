<?php
    define('PI', 3.1415);
    $radius = rand(100, 250);
    $diam = $radius * 2;
    $s      = round($radius ** 2 * PI, 2);
    $size   = "{$diam}px";
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
            flex-direction: column;
        }
        .box{
            border: 1px solid;
            display: block;
            margin-top: 30px;
            border-radius: 50%;
            text-align: center;
            width: <?php echo $size; ?>;
            height: <?php echo $size; ?>;
        }
    </style>
</head>
<body>
    <div class="box" style="background-color: yellow;">
    </div>
    <h2>Число PI - <?php echo PI; ?></h2>
    <h2>Радіус - <?php echo $radius; ?> </h2>
    <h2>Площа - <?php echo $s; ?></h2>
</body>
</html>