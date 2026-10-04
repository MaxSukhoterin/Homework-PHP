<?php
$year           = 2026;                                             // integer
$is_hungry      = false;                                            // boolean
$price          = 50.60;                                            // float
$favorite_movie = "Гаррі Поттер: Дари Смерті"; // string
const UNION     = "Антанта";                                 // string
define("HI", "Бувай!");                                        // string

echo "<h1>Зараз $year рік</h1>";
echo "\n";
if ($is_hungry) {
    echo "<p>Ви зараз голодні, можете з'їсти бутрік за $price UAH</p>";
} else {
    echo "<p> Ви зараз неголодні, але все одно можете з'їсти бутрік за $price UAH</p>";

}
echo "\n";

echo "<h5>Ваш улюблений фільм - $favorite_movie</h5>";
if ($favorite_movie == "Гаррі Поттер: Дари Смерті") {
    $secret_color = "red";
    echo "<p style='color: $secret_color'>(А мій інший :( )</p>";
} else {
    $secret_color = "green";
    echo "<p style = 'color: $secret_color'>(Мій теж!)</p>";
}

echo "\n";

echo "<h6>Хочеш вступити у " . UNION . "?</h6>";
echo "\n";

echo "<h2>Ну все, " . HI . "</h2>";
