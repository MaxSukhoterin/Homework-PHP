<?php
$str = "[   34  555   8 9 9  ]";
echo "Без пробілів: \n";
echo str_replace(" ", "", $str);
echo "\n\n";
echo "З одним пробілом (1 спосіб): \n";
$str1 = str_replace("   ", " ", $str);
$str2 = str_replace("  ", " ", $str1);
echo $str2;
echo "\n\n";
$longest = 0;
$current = 0;

for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] === ' ') {
        $current++;
        if ($current > $longest) {
            $longest = $current;
        }

    } else {
        $current = 0;
    }
}
for ($i = $longest; $i > 0; $i--) {
    $text  = str_repeat(" ", $i);
    $arr[] = $text;
}
$str3 = str_replace($arr, " ", $str);
echo "З одним пробілом (2 спосіб): \n";
echo $str3;
