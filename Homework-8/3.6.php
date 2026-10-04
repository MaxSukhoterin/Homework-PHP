<?php
$text='The :budget $report lists $two: required items: $150 for office supplies and $300 for software. Additionally: $note these $two payment: methods: $50 cash or $200 online transfer:';
$reg1='/\b\w+(?=:)\b/';
$reg2='/\b(?<!\$)\w+\b/';
preg_match_all($reg1, $text, $arr1);
preg_match_all($reg2, $text, $arr2);
echo "Слова, після яких стоїть двокрапка: ";
print_r($arr1);
echo "Слова, перед якими не стоїть долар: ";
print_r($arr2);
