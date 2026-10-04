<?php
$dictionary1 = [
    'apple'  => 'яблуко',
    'book'   => 'книга',
    'dog'    => 'собака',
    'water'  => 'вода', // спільне
    'friend' => 'друг', // спільне
    'school' => 'школа',
    'run'    => 'бігати',     // спільне
    'table'  => 'табличка', // спільне
    'stick'  => ['палиця', 'ціпок', 'клей'],
    'light'  => ['світло', 'лампа', 'легкий'],
    'bank'   => ['банк', 'запас'], // спільне 1 значення БАНК
];
$dictionary2 = [
    'cat'    => 'кіт',
    'house'  => 'будинок',
    'tree'   => 'дерево',
    'sun'    => 'сонце',
    'water'  => 'вода',                                 // спільне
    'friend' => 'друг',                                 // спільне
    'table'  => 'стіл',                                 // спільне
    'run'    => ['працювати', 'керувати'], // спільне
    'watch'  => ['годинник', 'дивитися'],
    'match'  => ['сірник', 'матч', 'підходити'],
    'bank'   => ['банк', 'берег річки'], // спільне 1 значення БАНК
];
//Шукаємо спільне та різне в масивах
$connect0   = array_intersect_key($dictionary1, $dictionary2);
$different0 = array_diff_key($dictionary1, $dictionary2);
$different1 = array_diff_key($dictionary2, $dictionary1);

//Створюємо новий словник, туди добавляємо УСІ разні ключі з їх значеннями
$dictionary_new = array_merge($different0 , $different1);


// Розбираємося зі спільним
foreach ($connect0 as $key => $value) {
    $value1 = $dictionary2[$key];
    if ($value == $value1) {
        $dictionary_new[$key] = $value;
    } else {
        $dictionary_new[$key] = array_values(array_unique(array_merge((array)$value, (array)$value1)));
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Об'єднаний словник</h1>
<?php
echo "<pre>";
foreach ($dictionary_new as $key => $value) {
    if (! is_array($value)) {
        echo "$key:\n\t$value\n<br>";
    } else {
        echo "$key: \n";
        foreach ($value as $v) {
            echo "\t$v\n";
        }
        echo "<br>";
    }
    echo "<br>";
}
echo "</pre>";
?>
</body>
</html>

<!-- Старий код, що був написаний першим -->



<!-- foreach ($connect0 as $key => $value) {
    $value1 = $dictionary2[$key];
    if ($value == $value1) {
        $dictionary_new[$key] = $value;
    } else {
        if (! is_array($value) && ! is_array($value1)) {
            $dictionary_new[$key][] = $value;
            $dictionary_new[$key][] = $value1;
        } elseif (is_array($value) && ! is_array($value1)) {
            $dictionary_new[$key][] = $value1;
            foreach ($value as $vl) {
                $dictionary_new[$key][] = $vl;
            }
        } elseif (! is_array($value) && is_array($value1)) {
            $dictionary_new[$key][] = $value;
            foreach ($value1 as $vl1) {
                $dictionary_new[$key][] = $vl1;
            }

        } else {
            $if_connect = array_intersect($value, $value1);
            $if_diff    = array_diff($value, $value1);
            $if_diff1   = array_diff($value1, $value);
            $result1    = array_merge($if_diff, $if_diff1);
            foreach ($if_connect as $con) {
                $dictionary_new[$key][] = $con;
            }
            foreach ($result1 as $diff) {
                $dictionary_new[$key][] = $diff;
            }
        }
    }

} -->
