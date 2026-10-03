<?php
    $students = [
    [
        "name"    => "Joan",
        "surname" => "Joanson",
        "year"    => 2005,
        "marks"   => [
            "PHP"  => 4,
            "JS"   => 3,
            "HTML" => 5,
        ],
    ],
    [
        "name"    => "Jack",
        "surname" => "Smith",
        "year"    => 2003,
        "marks"   => [
            "PHP"  => 3,
            "JS"   => 3,
            "HTML" => 4,
        ],
    ],
    [
        "name"    => "Martin",
        "surname" => "Miller",
        "year"    => 2004,
        "marks"   => [
            "PHP"  => 4,
            "JS"   => 5,
            "HTML" => 5,
        ],
    ],
    [
        "name"    => "Max",
        "surname" => "Sukhoterin",
        "year"    => 2005,
        "marks"   => [
            "PHP"  => 5,
            "JS"   => 5,
            "HTML" => 5,
        ],
    ],

    ];
    function serMark($student)
    {
    return $seredne = array_sum($student['marks']) / count($student['marks']);
    }
    function draw($arr, $article, $color, $isMarks)
    {
    echo "<div class='sorting'>";
    if ($isMarks) {
        uasort($arr, fn($a, $b) => serMark($a) <=> serMark($b));
    } else {
        uasort($arr, fn($a, $b) => $a[$article] <=> $b[$article]);
    }
    foreach ($arr as $student) {
        echo "<div class='student'>";
        if ($isMarks) {
            echo "";
        } else {
            echo "<h3 style='color: $color;'><em>" . $student[$article] . "</em></h3>";
        }
        array_walk($student, function ($value, $key) use ($article, $isMarks, $color) {
            echo "<h5 class='name'>";
            if (! is_array($value)) {
                if ($key == $article) {
                    return;
                } else {
                    echo strtoupper($key) . " => " . $value;
                }
            } else {
                echo "Marks: <br>";
                foreach ($value as $subject => $mark) {
                    echo strtoupper($subject) . " => $mark <br>";
                }
                echo "<br>";
                $average = round(array_sum($value) / count($value), 2);
                if ($isMarks) {
                    echo "<h3 style='color:$color;'><em>Average mark => $average</em></h3>";
                } else {
                    echo "Average mark => $average";
                }
            }
            echo "\n";
            echo "</h5>";

        });
        echo "</div>";
    }
    echo "</div>";
    }
    $byname     = $students;
    $bysurname  = $students;
    $bybirthday = $students;
    $bySerMark  = $students;
    echo "<h2>За Ім'ям</h2>";
    draw($byname, 'name', 'blue', false);
    echo "<hr>";
    echo "<hr>";

    echo "<h2>За Прізвищем</h2>";
    draw($bysurname, 'surname', 'red', false);
    echo "<hr>";
    echo "<hr>";

    echo "<h2>За Роком народження</h2>";
    draw($bybirthday, 'year', 'magenta', false);
    echo "<hr>";
    echo "<hr>";

    echo "<h2>За Середнім балом</h2>";
    draw($bySerMark, 'avg', 'orange', true);
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

            .sorting{
                display: flex;
                flex - wrap: wrap;
                justify - content: center;
                gap: 20px;
                margin - bottom: 30px;

            }
        .student{
            display: inline-block;
            width: 200px;
            height: 270px;
            border: solid 2px black;
            text-align: center;
            margin-right: 20px;
            border-radius: 20%;
            transition: transform 0.3s ease;
        }
        .student:hover{
            transform: scale(1.05);
        }
        h3{
            color: blue;
        }
    </style>
</head>
<body>

</body>
</html>
<?php
// echo "<div>";

    // uasort($byname, fn($a, $b) => $a['name'] <=> $b['name']);

    // foreach ($byname as $student) {
    // echo "<div class='student'>";
    // array_walk($student, function ($value, $key) {
    //     echo "<h5 class='name'>";
    //     if (! is_array($value)) {
    //         if ($key == 'name') {
    //             echo "<em>$value</em>";
    //         } else {
    //             echo strtoupper($key) . " => " . $value;
    //         }
    //     } else {
    //         echo "Marks: <br>";
    //         foreach ($value as $subject => $mark) {
    //             echo strtoupper($subject) . " => $mark <br>";
    //         }
    //         echo "<br>";
    //         $average = round(array_sum($value) / count($value), 2);
    //         echo "Average mark => $average";

    //     }
    //     echo "\n";
    //     echo "</h5>";

    // });
    // echo "</div>";
    // }
    // echo "</div>";

    // echo "<div>";

    // uasort($bysurname, fn($a, $b) => $a['surname'] <=> $b['surname']);

    // foreach ($bysurname as $student) {
    // echo "<div class='student'>";
    // array_walk($student, function ($value, $key) {
    //     echo "<h5 class='name'>";
    //     if (! is_array($value)) {
    //         if ($key == 'surname') {
    //             echo "<em>$value</em>";
    //         } else {
    //             echo strtoupper($key) . " => " . $value;
    //         }
    //     } else {
    //         echo "Marks: <br>";
    //         foreach ($value as $subject => $mark) {
    //             echo strtoupper($subject) . " => $mark <br>";
    //         }
    //         echo "<br>";
    //         $average = round(array_sum($value) / count($value), 2);
    //         echo "Average mark => $average";

    //     }
    //     echo "\n";
    //     echo "</h5>";

    // });
    // echo "</div>";
    // }
    // echo "</div>";

    // echo "<div>";

    // uasort($bybirthday, fn($a, $b) => $a['year'] <=> $b['year']);

    // foreach ($bybirthday as $student) {
    // echo "<div class='student'>";
    // array_walk($student, function ($value, $key) {
    //     echo "<h5 class='name'>";
    //     if (! is_array($value)) {
    //         if ($key == 'year') {
    //             echo "<em>$value</em>";
    //         } else {
    //             echo strtoupper($key) . " => " . $value;
    //         }
    //     } else {
    //         echo "Marks: <br>";
    //         foreach ($value as $subject => $mark) {
    //             echo strtoupper($subject) . " => $mark <br>";
    //         }
    //         echo "<br>";
    //         $average = round(array_sum($value) / count($value), 2);
    //         echo "Average mark => $average";

    //     }
    //     echo "\n";
    //     echo "</h5>";

    // });
    // echo "</div>";
    // }
    // echo "</div>";

    // echo "<hr>";
    // echo "<hr>";

    // echo "<h2>За Середнім балом</h2>";

    // echo "<div>";
    // $bySerMark = $students;
    // uasort($bySerMark, fn($a, $b) => serMark($a) <=> serMark($b));

    // foreach ($bySerMark as $student) {
    // echo "<div class='student'>";
    // array_walk($student, function ($value, $key) {
    //     echo "<h5 class='name'>";
    //     if (! is_array($value)) {
    //         echo strtoupper($key) . " => " . $value;
    //     } else {
    //         echo "Marks: <br>";
    //         foreach ($value as $subject => $mark) {
    //             echo strtoupper($subject) . " => $mark <br>";
    //         }
    //         echo "<br>";
    //         $average = round(array_sum($value) / count($value), 2);
    //         echo "<em>Average mark => $average</em>";

    //     }
    //     echo "\n";
    //     echo "</h5>";

    // });
    // echo "</div>";
    // }
    // echo "</div>";

    // echo "<hr>";
    // echo "<hr>";