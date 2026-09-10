<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: solid 1px;
        }
        tr, td, th{
            width: 50px;
            border: solid 1px;
        }
    </style>
</head>
<body>
<?php
    $n = 10;
    echo "<table>";
    for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 1) {
        echo "<tr>";
        $foto = "./images/img_$i.jpg";
        echo "<th>$i</th>";
        echo "<td><img src=$foto alt=''></td>";
        echo "</tr>";
    } else {
        continue;
    }

    }
    echo "</table>";
?>
</body>
</html>