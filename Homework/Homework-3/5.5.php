<?php
function test_odd($var)
{
    return ($var > 0);
}
$newarr = [];
$arr = [[1, -5], [99, -0.5], [24, 61], [9, -45]];
foreach ($arr as $key => $value) {
    for ($i=0; $i < count($value); $i++) { 
        $newarr[]=$value[$i];
    }
}
echo "<h4>Увесь масив:</h4>";
print_r($newarr);

echo "<h4>Відфільтрований масив:</h4>";
print_r(array_filter($newarr, "test_odd"));

echo "<h4>Сума елементів відфільтрованого масиву:</h4>";
echo "<h4>" . array_sum(array_filter($newarr, "test_odd")) . "</h4>";