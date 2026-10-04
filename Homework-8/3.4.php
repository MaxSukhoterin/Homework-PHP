<?php
$text = "apple_tree__sky.water fire._earth_cloud stone_wind_light dark_water.moon fire_apple_earth... sky_wind_stone tree_cloud_light__ dark_water.moon  fire_apple_earth";
$first = preg_split('/[\s._]+/', $text);
$second = array_unique($first);
print_r($second);