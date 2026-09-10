<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: solid 1px;
        }
         th{
            width: 45px;
            border: solid 1px;
        }
        td{
            width: 20px;
            border: solid 1px;

        }
        img{
            width: 50px;
        }
    </style>
</head>
<body>
    <h1>Температура</h1>
<?php
    $myapi = "0630d51f48ecf8ae8c3d3a495c8277da";
    $city  = "Kharkiv";

    $fileForResponse = __DIR__ . '/weather.json';
    $freshnessTime   = 300;

    $t = null;
    if (file_exists($fileForResponse) && (time() - filemtime($fileForResponse) < $freshnessTime)) {
    $jsonData = file_get_contents($fileForResponse);
    $data     = json_decode($jsonData, true);
    } else {
    $apiURL = "https://api.openweathermap.org/data/2.5/weather?q={$city}&units=metric&appid={$myapi}";
    $ch     = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiURL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if ($httpCode === 200 && $response) {
        $data = json_decode($response, true);
        file_put_contents($fileForResponse, $response);
    } elseif (file_exists($fileForResponse
    )) {
        $data = json_decode(file_get_contents($fileForResponse), true);
    }

    }
    if (isset($data['main']['temp'])) {
    $t         = round($data['main']['temp']);
    $feelslike = round($data['main']['feels_like']);
    $wind      = $data['wind']['speed'];
    }

    if ($t !== null) {
    echo "<h2>Зараз у {$city} температура: {$t}°C</h2>";
    echo "<h2>Відчувається як: {$feelslike}°C</h2>";
    } else {
    echo "<h2>Не вдалося отримати температуру.</h2>";
    }
    echo '<div>';
    if ($wind <= 5) {
    echo "Погода з малим вітром.";
    $imgsrc = "weather_1.png";
    } elseif ($wind > 5 && $wind < 15) {
    echo "Триває вітер";
    $imgsrc = "weather_2.png";
    } else {
    echo "Дме сильний вітер. Торнадо!";
    $imgsrc = "weather_3.png";
    }
    echo "<br>";
    echo "<img src='./image/$imgsrc' alt=''>";
    echo "</div>";

    echo "<table>";
    for ($i = 40; $i >= -20; $i--) {
    echo "<tr>";
    echo "<th>$i °С</th>";
    if ($i == $feelslike) {
        echo "<td style = 'background-color: green;'></td>";
    } elseif ($i <= $t) {
        echo "<td style='background-color: red;'></td>";
    } else {
        echo "<td style = 'background-color: yellow;'></td>";
    }

    echo "</tr>";
    }
    echo "</table>";
?>
</body>
</html>