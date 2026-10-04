<?php
$users1 = ["John" => "qwerty", "Nicole" => "asdf", "Mark" => "ww"];
$users2 = ["Joan" => "1234", "Mark" => "poiu", "Nicole" => "ggg"];


$users3_0 = array_intersect_key($users1, $users2);
$users3_1 = array_intersect_key($users2, $users1);
$users3 = array_merge_recursive($users3_0, $users3_1);
echo "<h4>Масив повторених користувачів</h4>";
print_r($users3);

$users4_0 = array_diff_key($users1, $users2);
$users4_1 = array_diff_key($users2, $users1);
$users4 = array_merge($users4_0, $users4_1);
echo "<h4>Масив неповторених користувачів</h4>";
print_r($users4);
