<?php
    $directors = [
    'Стівен Спілберг'   => [
        [
            'title' => 'Парк Юрського періоду',
            'year'  => 1993,
        ],
        [
            'title' => 'Список Шиндлера',
            'year'  => 1993,
        ],
        [
            'title' => 'Врятувати рядового Раяна',
            'year'  => 1998,
        ],
    ],
    'Крістофер Нолан'   => [
        [
            'title' => 'Початок',
            'year'  => 2010,
        ],
        [
            'title' => 'Інтерстеллар',
            'year'  => 2014,
        ],
        [
            'title' => 'Оппенгеймер',
            'year'  => 2023,
        ],
    ],
    'Квентін Тарантіно' => [
        [
            'title' => 'Кримінальне чтиво',
            'year'  => 1993,
        ],
        [
            'title' => 'Безславні виродки',
            'year'  => 2009,
        ],
    ],
    ];
    function search($directors, $data)
    {
    $finish = [];
    $data   = trim($data);
    if ($data === '') {
        return $finish;
    }
    foreach ($directors as $director => $films) {
        $matchedFilms = [];
        foreach ($films as $film) {
            if (stristr($director, $data) !== false || stristr($film['title'], $data) !== false || stristr((string) $film['year'], $data) !== false) {
                $matchedFilms[] = $film;
            }
        }
        if (! empty($matchedFilms)) {
            $finish[$director] = $matchedFilms;
        }
    }
    return $finish;
    }

    function draw($directors)
    {
    if (empty($directors)) {
        echo "<p style='text-align: center; margin: 20px;'>За вашим запитом нічого не знайдено.</p>";
        return;
    }
    echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; width: 100%; max-width: 600px; margin: 20px auto; font-family: Arial, sans-serif;'>";
    echo "<tr style='background-color: #f2f2f2;'>";
    echo "<th>Режиссер</th>";
    echo "<th>Название фильма</th>";
    echo "<th>Год выпуска</th>";
    echo "</tr>";
    foreach ($directors as $directorName => $movies) {
        $rowCount   = count($movies);
        $firstMovie = true;
        foreach ($movies as $movie) {
            echo "<tr>";
            if ($firstMovie) {
                echo "<td rowspan='{$rowCount}' style='font-weight: bold;'>{$directorName}</td>";
                $firstMovie = false;
            }
            echo "<td>«{$movie['title']}»</td>";
            echo "<td>{$movie['year']}</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
    }
    $finish   = [];
    $isSearch = false;

    if (isset($_POST['forSearch']) && trim($_POST['forSearch']) !== '') {
    $forSearch = $_POST['forSearch'];
    $finish    = search($directors, $forSearch);
    $isSearch  = true;
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
    <form action="" method="post" style="text-align: center; margin-top: 20px;">
        <input type="text" name="forSearch" placeholder="Введіть те, що шукаєте" value="<?php echo htmlspecialchars($_POST['forSearch'] ?? '') ?>">
        <button type="submit">Відіслати запит</button>
        <?php if ($isSearch): ?>
            <a href="<?php echo $_SERVER['PHP_SELF'] ?>"><button type="button">Скинути</button></a>
        <?php endif; ?>
    </form>
    <?php
        if ($isSearch) {
            draw($finish);
        } else {
            draw($directors);
        }
    ?>
</body>
</html>