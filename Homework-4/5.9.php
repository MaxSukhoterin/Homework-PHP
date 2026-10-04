<?php
$films = [
    "Титанік"         => ["Камерон", 1997],
    "Хрещений батько" => ["Коппола", 1972],
    "Початок"         => ["Нолан", 2010],
    "Форрест Гамп"    => ["Земекіс", 1994],
    "Матриця"         => ["Вачовські", 1999],
];
$films_by_names =  $films;
$films_by_author = $films;
$films_by_year = $films;

ksort($films_by_names);

uasort($films_by_author, function($a, $b){
    return strcmp($a[0], $b[0]);
});

 uasort($films_by_year, function($a, $b){
    return $a[1] <=> $b[1];
});

echo "<h3>Відсортований за назвою масив фільмів:</h3>";
array_walk($films_by_names, function($value, $key){
    echo "<h5 class='name'>";
    echo $key . "-" . "[" . $value[0] . "," . $value[1] . "]";
    echo "\n";
    echo "</h5>";
});
echo "\n\n";

echo "<h3>Відсортований за автором масив фільмів:</h3>";
array_walk($films_by_author, function ($value, $key) {
    echo "<h5 class='author'>";
    echo $value[0] . "-" . "[" . $key . "," . $value[1] . "]";
    echo "\n";
    echo "</h5>";
});
echo "\n\n";

echo "<h3>Відсортований за роком масив фільмів:</h3>";
array_walk($films_by_year, function ($value, $key) {
    echo "<h5 class='year'>";
    echo $value[1] . "-" . "[" . $key . "," . $value[0] . "]";
    echo "\n";
    echo "</h5>";
});
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .author{
            color: green;
        }
        .name{
            color: blue;
        }
        .year{
            color: magenta;
        }
    </style>
</head>
<body>
    
</body>
</html>