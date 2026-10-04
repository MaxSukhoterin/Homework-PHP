<?php
$words = [
    "apple",
    "BANANA",
    "JavaScript",
    "computer",
    "DATABASE",
    "deVeloper",
    "PHP",
    "keyboard",
    "OpenAI",
    "SERVERS",
    "algorithm",
    "CodeSnippet",
];
function toLow($text){
   return strtolower($text);
}
function concat($first, $second){
    return $first . '-' . $second;
}
echo "Переведено в нижній регістр: ";
$arr = array_map('toLow', $words);
print_r($arr);
echo array_reduce($arr, "concat");
