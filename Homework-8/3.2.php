<?php
$text = "<p>Права пользователей:</p>
<ul>
  <li>Administrator</li>
  <li>Editor</li>
  <li>Subscriber</li>
</ul>";
$reg = '/(\<li\>)(\w+)(\<\/li\>)/i';
$replacement = '${1}<a href="http://www.php.kh.ua/script.php?role=${2}">${2}</a>${3}';
echo preg_replace($reg, $replacement, $text);