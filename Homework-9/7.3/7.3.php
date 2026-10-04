<?php
require "data.php";
foreach ($students as $key => $man_info) {
    if ($man_info["average_score"] > 3) {
        $the_best[] = $man_info["name"];
    } else {
        $the_worst[] = $man_info["name"];
    }
    if ($man_info["olympiad_participant"] == true && $man_info["average_score"] > 3) {
        $olympiads[] = $man_info["name"];
    }
}
$str = DATE . " " . SIGN . "\n";
$str .= "Шановні " . implode(", ", $the_best) . ", дякуємо вам за успіхи в навчанні! \n";
$str .= "Шановні " . implode(", ", $the_worst) . ", на жаль, ви відраховані.\n";
$str .= "Шановні " . implode(", ", $olympiads) . ", наші олімпіадники! Вам начисляється стипендія!!!";
echo $str;
