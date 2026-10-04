<?php
    $reg = '/^[A-Za-z][A-Za-z0-9_]+\@[A-Za-z]+\.\w+/';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (! empty($_POST["email"])) {
        $inform = trim($_POST["email"]);
        if (preg_match($reg, $inform)) {
            echo "<h1>Ваша пошта підходить!</h1>";
        } else {
            echo "<h1>Ні, ця пошта, на жаль, не підходить.</h1>";
        }
    } else {
        echo "<h1>Будь ласка, введіть email.</h1>";
    }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            width: 300px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="email" id="" >
        <br><br>
        <button type="submit">Відправити email на перевірку</button>
    </form>
</body>
</html>
