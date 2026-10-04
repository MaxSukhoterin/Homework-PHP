<?php
$n = rand(1, 13);
switch ($n) {
    case '1':
        $answer = "Вивчаємо букви.";
        $years = 13 - $n;

        break;

    case '2':
        $answer = "Вивчаємо таблицю множення.";
        $years = 13 - $n;

        break;

    case '3':
        $answer = "Вивчаємо дроби.";
        $years = 13 - $n;
        break;

    case '4':
        $answer = "Вивчаємо аксіоми.";
        $years = 13 - $n;
        break;

    case '5':
        $answer = "Вивчаємо степені.";
        $years = 13 - $n;
        break;

    case '6':
        $answer = "Вивчаємо функції.";
        $years = 13 - $n;
        break;

    case '7':
        $answer = "Вивчаємо алгебру та геометрію.";
        $years = 13 - $n;
        break;

    case '8':
        $answer = "Вивчаємо квадратні рівняння.";
        $years = 13 - $n;
        break;
    case '9':
        $answer = "Вивчаємо графіки.";
        $years = 13 - $n;
        break;
    case '10':
        $answer = "Вивчаємо математику в просторі.";
        $years = 13 - $n;
        break;
    case '11':
        $answer = "Вивчаємо похідну.";
        $years = 13 - $n;
        break;
    case '12':
        $answer = "Майже все вивчили!";
        $years = 13 - $n;
        break;

    default:
        $answer = "Такого класу в нас немає!";
        $years = 0;
        break;
}
$finish = <<<EOD
<h2>Ви навчаєтеся у $n класі. Залишилося вчитися $years років.</h2>
<h3>$answer</h3>
EOD;
echo $finish;