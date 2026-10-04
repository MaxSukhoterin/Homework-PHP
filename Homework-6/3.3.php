<?php
$text    = "The sun dipped behind the hills, painting the sky in soft orange and pink as the town settled into evening.";
$newtext = "> " . wordwrap($text, 20, "\n> ");
echo $newtext;
