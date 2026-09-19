<?php
$arr = [1, 5, 99, 0, 24, 61, 9, -45];
$sum = array_sum($arr);
$count = count($arr);
$ser = $sum / $count;

echo "<h3>Середнє арифметичне елементів масиву</h3><br>";
print_r($arr);
echo "<br>";
echo "<h3>Дорівнює $sum / $count = $ser</h3>";
