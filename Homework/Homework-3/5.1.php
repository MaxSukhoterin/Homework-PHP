<?php
$arr = [1, 5, 99, 0, 24, 61, 9, -45];
$min = min($arr);
$max = max($arr);
$sum = $min + $max;

echo "<h3>Сума мінімального та максимального елементів масиву</h3><br>";
print_r($arr);
echo "<br>";
echo "<h3>Дорівнює $min + $max = $sum</h3>";