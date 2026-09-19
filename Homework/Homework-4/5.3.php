<?php
$arr = ["sulhoterin"=>2011, "hospodi"=>2010, "jajha"=>2009];

echo "<h3>Масив даних</h3>";
print_r($arr);

echo "<h4>Відсортований масив по ключам</h4>";
ksort($arr);
print_r($arr);

echo "<h4>Відсортований масив по значенням, але з ключами</h4>";
asort($arr);
print_r($arr);

echo "<h4>Відсортований масив по значенням, але без ключами</h4>";
sort($arr);
print_r($arr);
