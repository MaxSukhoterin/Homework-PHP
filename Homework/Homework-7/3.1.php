<?php
$reg    = '/images\/IMG_\d+\.(jpg|png|gif)/i';
$dir    = 'images/';
$allMatches = [];
$images = glob($dir . '*');
// print_r($images);
for ($i = 0; $i < count($images); $i++) {
    if (preg_match_all($reg, $images[$i], $matches)) {
        foreach ($matches[0] as $match) {
            $allMatches[] = $match;
        }
    }
}
echo "Вам підходять " . count($allMatches). " фотографії. А саме:\n";
foreach ($allMatches as $key => $value) {
    echo $key+1 . ". " . $value. "\n";
}