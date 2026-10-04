<?php
$text = "Ми будемо раді бачити Вашого сина на нашому заході. Чекаємо на нього 25 жовтня. Оргкомітет.";
$arr  = explode(". ", $text);
// print_r($arr);
$arr[0] = substr_replace($arr[0], 'Шановний Євген! ', 0, 0);
$arr = str_replace("Оргкомітет", "Адміністрація", $arr);
$arr = str_replace("Вашого сина", "Вашу дочку", $arr);
$arr = str_replace("нього", "неї", $arr);
$final = implode(".\n", $arr);
echo $final;
