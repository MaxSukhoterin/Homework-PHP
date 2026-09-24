<?php
    $countries = [
    [
        "name"       => "France",
        "capital"    => "Paris",
        "area"       => 640679,
        "population" => [
            "2000" => 59278000,
            "2010" => 59278000,
        ],
    ],
    [
        "name"       => "Xngland",
        "capital"    => "London",
        "area"       => 130395,
        "population" => [
            "2000" => 58800000,
            "2010" => 63200000,
        ],
    ],
    [
        "name"       => "Deutschland",
        "capital"    => "Berlin",
        "area"       => 357021,
        "population" => [
            "2000" => 82260000,
            "2010" => 81752000,
        ],
    ],
    ];
    function serPop($country)
    {
    return $seredne = array_sum($country['population']) / count($country['population']);
    }

    echo "<h2>За назвою</h2>";

    echo "<div class='byname'>";
    $byname = $countries;
    uasort($byname, fn($a, $b) => $a['name'] <=> $b['name']);
    foreach ($byname as $k => $v) {
    array_walk($byname[$k], function ($value, $key) {
        echo "<h5 class='name'>";
        if (! is_array($value)) {
            echo $key . "=> " . $value;
        } else {
            echo $key . " => " . $value["2000"];
            echo "<br>";
            echo $key . "=> " . $value["2010"];
            echo "<br>";
            $average = array_sum($value) / count($value);
            echo "average population => $average";

        }
        echo "\n";
        echo "</h5>";

    });
    echo "<hr>";
    }
    echo "</div>";

    echo "<hr>";
    echo "<hr>";
    echo "<br>";
    echo "<h2>За столицею</h2>";

    echo "<div class='bycapital'>";
    $bycapital = $countries;
    uasort($bycapital, fn($a, $b) => $a['capital'] <=> $b['capital']);
    foreach ($bycapital as $k => $v) {
    array_walk($bycapital[$k], function ($value, $key) {
        echo "<h5 class='name'>";
        if (! is_array($value)) {
            echo $key . "=> " . $value;
        } else {
            echo $key . " => " . $value["2000"];
            echo "<br>";
            echo $key . "=> " . $value["2010"];
            echo "<br>";
            $average = array_sum($value) / count($value);
            echo "average population => $average";

        }
        echo "\n";
        echo "</h5>";

    });
    echo "<hr>";
    }
    echo "</div>";
    echo "<hr>";
    echo "<hr>";
    echo "<br>";
    echo "<h2>За площею</h2>";
    echo "<div class='byarea'>";
    $byarea = $countries;
    uasort($byarea, fn($a, $b) => $a['area'] <=> $b['area']);
    foreach ($byarea as $k => $v) {
    array_walk($byarea[$k], function ($value, $key) {
        echo "<h5 class='name'>";
        if (! is_array($value)) {
            echo $key . "=> " . $value;
        } else {
            echo $key . " => " . $value["2000"];
            echo "<br>";
            echo $key . "=> " . $value["2010"];
            echo "<br>";
            $average = array_sum($value) / count($value);
            echo "average population => $average";

        }
        echo "\n";
        echo "</h5>";

    });
    echo "<hr>";
    }
    echo "</div>";
    echo "<hr>";
    echo "<hr>";
    echo "<br>";
    echo "<h2>За середньою к-стю населення</h2>";
    echo "<div class='byser'>";
    $byser = $countries;
    uasort($byser, fn($a, $b) => serPop($a) <=> serPop($b));
    foreach ($byser as $k => $v) {
    array_walk($byser[$k], function ($value, $key) {
        echo "<h5 class='name'>";
        if (! is_array($value)) {
            echo $key . "=> " . $value;
        } else {
            echo $key . " => " . $value["2000"];
            echo "<br>";
            echo $key . "=> " . $value["2010"];
            echo "<br>";
            $average = array_sum($value) / count($value);
            echo "average population => $average";

        }
        echo "\n";
        echo "</h5>";

    });
    echo "<hr>";
    }
    echo "</div>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            padding: 10px;
        }
        .byname{
            border: solid 3px red;
        }
        .bycapital{
            border: solid 3px green;
        }
        .byarea{
            border: solid 3px blue;
        }
        .byser{
            border: solid 3px purple;
        }
    </style>
</head>
<body>

</body>
</html>
