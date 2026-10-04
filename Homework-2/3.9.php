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
    $t = rand(-20, 20);
    echo "<table>";
    for ($i = 20; $i >= -20; $i--) {
    echo "<tr>";
    echo "<th>$i °С</th>";
    if ($i <= $t) {
        echo "<td style='background-color: red;'></td>";
    }
    else {
        echo "<td style = 'background-color: yellow;'></td>";
    }
    
    echo "</tr>";
    }
    echo "</table>";
?>
</body>
</html>