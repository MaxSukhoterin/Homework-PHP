<?php
$text = "<p>The <b>cat</b> sat &amp; <i>purred</i> — soft <br> &nbsp;warm.</p>";
echo $text . "\n";
echo "Якщо повінстю прибираємо теги: \n";
echo trim(strip_tags($text));
echo "\n\n";

echo "Якщо замінюємо теги: \n";
echo trim(htmlspecialchars($text)) . " - за допомгою htmlspecialchars\n";
echo "або \n";
echo trim(htmlentities($text), ENT_COMPAT) . " - за допомогою htmlentities";