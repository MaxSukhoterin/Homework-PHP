<?php
    $dictionary = [
    'work'   => 'працювати',
    'book'   => 'книга',
    'look'   => 'дивитися',
    'water'  => 'вода',
    'friend' => 'друг',
    'school' => 'школа',
    'glue'   => 'клей',
    'stick'  => ['палиця', 'ціпок', 'клей'],
    'light'  => ['світло', 'лампа', 'легкий'],
    'bank'   => ['банк', 'берег річки'],
    'run'    => ['бігти', 'працювати', 'керувати'],
    'watch'  => ['годинник', 'дивитися'],
    'match'  => ['сірник', 'матч', 'підходити'],
    ];
    $another = [];
    foreach ($dictionary as $word => $meaning) {
    if (! is_array($meaning)) {
        $another[$meaning][] = $word;
    } else {
        foreach ($meaning as $arr) {
            $another[$arr][] = $word;
        }
    }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['language'];
    if ($name == "English") {
        echo "<h3>Англійсько - Український словник</h3>";
        echo "<pre>";
        foreach ($dictionary as $key => $value) {
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
    } else {
        echo "<h3>Українсько - Англійський словник</h3>";
        echo "<pre>";
        foreach ($another as $key => $value) {
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

    }
    }
    echo "\n\n";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>
    <input type="radio" name="language" value="English" checked> English
  </label><br>

  <label>
    <input type="radio" name="language" value="Ukrainian"> Ukrainian
  </label><br>
   <button type="submit">Відправити</button>
    </form>
</body>
</html>
